一、tenpayLib下文件：实现基础接口逻辑，一般无需修改
1、RequestHandler.cs所有请求类的基类
2、ResponseHandler.cs页面交互模式的应答基类
3、ClientResponseHandler.cs后台系统调用模式的应答基类，支持XML格式
4、TenpayHttpClient.cs通讯类，支持http、https、双向https

二、根目录下的aspx的文件：调用的例子，需要根据业务情况调整，client开头的为后台系统调用模式接口
1、clientCheck.aspx 对账单下载例子
2、clientQueryRefund.aspx 退款查询例子
3、clientRefund.aspx 退款例子


