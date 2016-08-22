var webpack = require("webpack");
module.exports = {
    plugins: [
        new webpack.ProvidePlugin({         //ProvidePlugin gives jquery global scope- needed for plugins to work
            $: "jquery",
            jQuery: "jquery"
        })
    ],
    entry:  './src',
    output: {
        path:     '/mnt/Webstuff/html/Devel/Webpack2',
        filename: 'bundle.js',
    }
};
