## PHP Variables

A variable can have a short name (like x and y) or a more descriptive name (age, name, score).

### Rules for PHP variables:

* A variable starts with the $ sign, followed by the name of the variable
* A variable name must start with a letter or the underscore character
* A variable name cannot start with a number
* A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
* Variable names are case-sensitive ($age and $AGE are two different variables)

## PHP is a Loosely Typed Language

PHP automatically converts the variable to the correct data type, depending on its value.

In other languages such as C, C++, and Java, the programmer must declare the
name and type of the variable before using it.

## PHP Variables Scope

In PHP, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes:

* local
* global
* static

## PHP The global Keyword

The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside thefunction).

### Superglobals variables

 $_GET Collects form data after submitting an HTML form with method="get"
 $_POST Collects form data after submitting an HTML form with method="post"
 $_SESSION Holds session variables for user-specific data across page requests
 $_COOKIE Stores data that is passed to the user's browser
 $_SERVER Provides information about the server environment
 $_FILES Stores information about files uploaded via an HTML form
 $GLOBALS Stores all global variables in the script

## PHP Data Types

Variables can store data of different types, and different data types can do different things.

PHP supports the following data types:

* String
* Integer
* Float (floating point numbers - also called double)
* Boolean
* Array
* Object
* NULL
* Resource

### Constants

 • A constant in PHP is a name or an identifier for a fixed value
 • The value cannot be changed during script execution
 • There are two primary ways to define constants in PHP

1. Using the define() function (Traditional method)
2. Using the const keyword (Preferred inside classes)
