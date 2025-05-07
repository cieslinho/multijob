# Multijob WordPress Theme

Custom WordPress theme for Multijob company with ACF and Webpack integration.

## Requirements

- WordPress 6.0+
- PHP 7.4+
- Node.js 14+
- npm or yarn
- Advanced Custom Fields Pro

## Setup

1. Install dependencies:

```bash
npm install
# or
yarn install
```

2. Development:

```bash
npm run dev
# or
yarn dev
```

3. Production build:

```bash
npm run build
# or
yarn build
```

## Theme Structure

```
multijob/
├── assets/
│   ├── images/
│   ├── fonts/
│   ├── js/
│   └── scss/
├── inc/
│   ├── acf-blocks/
│   ├── custom-post-types/
│   └── theme-functions.php 
├── dist/
├── functions.php
├── index.php
├── style.css
├── screenshot.png
├── webpack.config.js
└── package.json
```

## Features

- Advanced Custom Fields Pro integration
- Webpack for asset bundling
- SCSS support
- Modern development workflow
- Responsive design
- Custom blocks support

## Development

The theme uses Webpack for asset compilation. Source files are located in the `assets` directory and compiled to the `dist` directory.

### Available Scripts

- `npm run dev` - Start development server with hot reload
- `npm run build` - Build production assets
- `npm run watch` - Watch for changes and rebuild assets

## License

This theme is proprietary and confidential. All rights reserved.
