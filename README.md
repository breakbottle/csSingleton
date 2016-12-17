# CS Singleton

Abstract PHP Class to allow you to grab an instance of a class without manual init

## Getting Started

Just extends your main class with csSingelton

### Prerequisites

Include this class in your autoload folder or include in your project

```php
 class YourClass extends csSingleton {

 }
```
### Example

Include this class in your autoload folder or include in your project

```PHP
YourClass::Instance();//equivalent to new YourClass()

YourClass::Instance().function();

YourClass::ChainInstance($addPropertiesToClassoObject);
```


## Authors

* **Clint Cain (Small)** - *Initial work* - [Breakbottle](https://github.com/breakbottle)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* From my c# works ;)
