# https://github.com/babel/babel-eslint/issues/6
# https://eslint.org/docs/user-guide/configuring#using-the-configuration-from-a-plugin


1. terminal: yarn add react
2. terminal: yarn add react-dom
3. terminal: yarn add eslint-plugin-react
4. terminal: yarn add -D babel-eslint

5. File .eslintrc: parserOptions > ecmaFeatures > "jsx": true,
6. File .eslintrc: parserOptions > ecmaFeatures > "modules": true,
7. File .eslintrc: plugins > "react"
8. File .eslintrc: rules > "react/jsx-uses-react": 2,
9. File .eslintrc: rules > "react/jsx-uses-vars": 2,
10. File .eslintrc: rules > "react/react-in-jsx-scope": 2,
11. File .eslintrc: add => "parser": "babel-eslint"
12. File .eslintrc: After plugins, add this: 'extends': [ "eslint:recommended", "plugin:react/recommended"]

If no .eslintrc file download it from https://github.com/roots/sage/blob/master/.eslintrc.js
