封装过滤类的实现

1.ValidataClass.php使用set与get方法实现对ip、email、url、整数范围取值等验证，以及对字符的过滤功能
2.validataTest.php是实现测试过滤类的功能
  其中 $person = new ValidataClass(); //获得容器
       $person->set("");//设置参数
       print($person->get());//获得验证结果
