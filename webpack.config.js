// Constants for packages.
const mode = process.env.NODE_ENV;
const path = require( 'path' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const IgnoreEmitPlugin = require( 'ignore-emit-webpack-plugin' );
const autoprefixer = require( 'autoprefixer' );
const RtlCssWebpackPlugin = require( 'rtlcss-webpack-plugin' );
const CssMinimizerPlugin = require( 'css-minimizer-webpack-plugin' );
const TerserPlugin = require( 'terser-webpack-plugin' );

// Compile the style.scss file.
const style = {
	mode: 'development',
	name: 'ZenWPBoilerplateMainStyle',
	entry: {
		style: path.resolve( __dirname, 'assets/scss/', 'style.scss' ),
	},
	output: {
		path: path.resolve( __dirname ),
		pathinfo: false,
	},
	module: {
		rules: [
			{
				test: /\.scss$/,
				use: [
					MiniCssExtractPlugin.loader,
					'css-loader',
					'postcss-loader',
					'sass-loader',
				],
			},
		],
	},
	plugins: [
		new MiniCssExtractPlugin(
			{
				filename: '[name].css',
			}
		),
		new IgnoreEmitPlugin(
			[
				'style.js',
			]
		),
	],
};

// Compile the SCSS files.
const styles = {
	mode: 'development',
	name: 'ZenWPBoilerplateStyle',
	entry: {
		'zen-wp-boilerplate': path.resolve( __dirname, 'assets/scss/', 'zen-wp-boilerplate.scss' ),
	},
	output: {
		path: path.resolve( __dirname, 'assets/css/' ),
		pathinfo: false,
	},
	module: {
		rules: [
			{
				test: /\.scss$/,
				use: [
					MiniCssExtractPlugin.loader,
					{
						loader: 'css-loader',
						options: {
							url: false,
						},
					},
					{
						loader: 'postcss-loader',
						options: {
							postcssOptions: {
								plugins: [
									autoprefixer(
										{
											cascade: false,
										}
									),
								],
							},
						},
					},
					{
						loader: 'sass-loader',
						options: {
							sassOptions: {
								indentWidth: 1,
								indentType: 'tab',
								outputStyle: 'expanded',
							},
						},
					},
				],
			},
		],
	},
	plugins: [
		new MiniCssExtractPlugin(
			{
				filename: '[name].css',
			}
		),
		new RtlCssWebpackPlugin(
			{
				filename: '[name]-rtl.css',
			}
		),
		new IgnoreEmitPlugin(
			[
				'zen-wp-boilerplate.js',
			]
		),
	],
};

// Default development webpack settings.
const config = [
	style,
	styles,
];

// Settings for production only.
if ( 'production' === mode ) {
	// Minify CSS files.
	const stylesmin = {
		mode: 'production',
		name: 'ZenWPBoilerplateStylesMin',
		entry: {
			'zen-wp-boilerplate.min': path.resolve( __dirname, 'assets/css/', 'zen-wp-boilerplate.css' ),
			'zen-wp-boilerplate.min-rtl': path.resolve( __dirname, 'assets/css/', 'zen-wp-boilerplate-rtl.css' ),
		},
		output: {
			path: path.resolve( __dirname, 'assets/css/' ),
			pathinfo: false,
		},
		module: {
			rules: [
				{
					test: /\.css$/,
					use: [
						MiniCssExtractPlugin.loader,
						{
							loader: 'css-loader',
							options: {
								url: false,
							},
						},
						'postcss-loader',
					],
				},
			],
		},
		optimization: {
			minimizer: [
				new CssMinimizerPlugin( {
					minimizerOptions: {
						preset: [
							'default',
							{
								discardComments: {
									removeAll: true,
								},
							},
						],
					},
				} ),
			],
		},
		plugins: [
			new MiniCssExtractPlugin(
				{
					filename: '[name].css',
				}
			),
			new IgnoreEmitPlugin(
				[
					'zen-wp-boilerplate.min.js',
					'zen-wp-boilerplate.min-rtl.js',
				]
			),
		],
	};

	// Minify JS files.
	const scriptsmin = {
		mode: 'production',
		name: 'ZenWPBoilerplateScriptsMin',
		entry: {
			'customizer.min': path.resolve( __dirname, 'assets/js/', 'customizer.js' ),
			'zen-wp-boilerplate.min': path.resolve( __dirname, 'assets/js/', 'zen-wp-boilerplate.js' ),
		},
		output: {
			path: path.resolve( __dirname, 'assets/js/' ),
			pathinfo: false,
		},
		optimization: {
			minimize: true,
			minimizer: [
				new TerserPlugin(
					{
						test: /\.js$/,
						extractComments: false,
					}
				),
			],
		},
		externals: {
			jquery: 'jQuery',
		},
	};

	// Push to default development webpack settings.
	config.push(
		stylesmin,
		scriptsmin,
	);
}

// Initialize webpack config and run the process.
module.exports = config;
