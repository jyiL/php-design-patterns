
#### 抽象工厂模式
工厂方法模式导致存在大量的工厂, 而抽象工厂模式就是提供了一个创建一系列相关或相互依赖的对象接口.抽象工厂和工厂方法最大的区别就是一个有一系列工厂,一个是只有一个.

应用场景: 不确定对应的实例化对象的时候, 创建对象类型和数目是未知的的时候

示例代码图:
![avatar](../../../resources/4.png)
	


优缺点:

* 产品和客户端完全分离
* 重复工作多
	
	
使用简单工厂来优化抽象工厂
利用反射来优化抽象工厂

总结: 简单工厂违法开闭原则, 对扩展的开放, 对修改的封闭. 工厂方法工厂类数目太多, 扩展性强一些. 抽象工厂支持增加产品总类, 抽象工厂增加新的产品组很方便
