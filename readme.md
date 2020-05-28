
# Example WordPress Block in Typescript

An example repository with the basic plumbing in place to build a WordPress block using Typescript.

## Quickstart

Clone repository to a WordPress plugin directory, or create appropriate symlinks to your WordPress install, and activate plugin in wp-admin.

**Note:** I'm using `yarn` here because it tends to be simplier, you can use equivalent `npm` commands.

### Build

You need to build the block before you can use in the editor, you need to run the following first:

```shell
$ yarn
$ yarn build
```

### Development build

To start a development build, that includes the `--watch` flag to auto rebuild on change:

```shell
$ yarn start
```

## Webpack Override

The block is built by [extending the webpack config](https://developer.wordpress.org/block-editor/packages/packages-scripts/#provide-your-own-webpack-config) for the standard wp-scripts, adding additional loader/resolver for `.tsx` and `.ts` files. See [webpack.config.js](webpack.config.js)

## Typescript + React

For React props, you need to specify the types for your properties, see the `src/edit.tsx` file for an example defining `className` as a string.

### WordPress Packages

Depending on the packages you use for your block, you may need to add additional type support. The following was done to add types for the `@wordpress/blocks` package used.

```shell
$ yarn add @types/wordpress__blocks
```

For example, if your block uses components from `@wordpress/components` you will need to add the necessary types. Use:

```shell
$ yarn add @types/wordpress__components
```
