var server = "http://localhost:8070/slabeste-cu-serban/slabeste-cu-serban-framework/public/tracking/receive";

var code = parseUrl();

if(code !== false)
{
    if(getData(code) == undefined)
    {
        var date = new Date();
        storeDate(code, date);
        sendData({
            pageCode: code,
            dateTime: date
        }, server);
    }
}
