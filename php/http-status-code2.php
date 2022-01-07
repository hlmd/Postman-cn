<?php

return [
    // 100
    '"Continue"' => '"继续"',
    '"This means that the server has received the request headers, and that the client should proceed to send the request body (in the case of a request for which a body needs to be sent; for example, a POST request). If the request body is large, sending it to a server when a request has already been rejected based upon inappropriate headers is inefficient. To have a server check if the request could be accepted based on the request\\\'s headers alone, a client must send Expect: 100-continue as a header in its initial request and check if a 100 Continue status code is received in response before continuing (or receive 417 Expectation Failed and not continue)."' => '"这意味着服务器已经收到了请求头, 并且客户端应继续发送请求正文(在需要发送正文的请求的情况下;例如 POST 请求). 如果请求正文很大, 则在基于不适当的头而已拒绝请求时将其发送到服务器效率不高. 若要让服务器仅根据请求的标头检查是否可以接受该请求, 客户端必须在其初始请求中发送 Expect: 100-continue 作为头, 并检查是否在响应中收到 100 继续状态码, 然后继续(或收到 417 预期失败, 因此无法继续)."',

    // 101
    '"Switching Protocols"' => '"切换协议"',
    '"This means the requester has asked the server to switch protocols and the server is acknowledging that it will do so."' => '"这意味着请求者已请求服务器切换协议, 并且服务器已确认将这样做."',

    // 102
    '"Processing"' => '"处理中"',
    '"Processing (WebDAV) (RFC 2518)"' => '"处理中(WebDAV) (RFC 2518)"',
    '"As a WebDAV request may contain many sub-requests involving file operations, it may take a long time to complete the request. This code indicates that the server has received and is processing the request, but no response is available yet. This prevents the client from timing out and assuming the request was lost."' => '"由于 WebDAV 请求可能包含许多涉及文件操作的子请求, 因此完成请求可能需要很长时间. 该代码表示服务器已接收并正在处理请求, 但是尚无响应. 这样可以防止客户端超时并假设请求已丢失."',

    // 103
    '"Checkpoint"' => '"检查点"',
    '"This code is used in the Resumable HTTP Requests Proposal to resume aborted PUT or POST requests."' => '"此代码用于可恢复 HTTP 请求建议, 以恢复中止的 PUT 或 POST 请求."',

    // 122
    '"Request-URI too long"' => '"请求 URI 太长"',
    '"This is a non-standard IE7-only code which means the URI is longer than a maximum of 2083 characters."' => '"这是非标准的仅限 IE7 的代码, 这意味着 URI 的长度超过了 2083 个字符的最大长度."',

    // 200
    '"OK"' => '"OK"',
    '"Standard response for successful HTTP requests. The actual response will depend on the request method used. In a GET request, the response will contain an entity corresponding to the requested resource. In a POST request the response will contain an entity describing or containing the result of the action."' => '"成功 HTTP 请求的标准响应. 实际响应将取决于所使用的请求方法. 在 GET 请求中, 响应将包含与所请求资源相对应的实体. 在 POST 请求中, 响应将包含描述或包含操作结果的实体."',

    // 201
    '"Created"' => '"已创建"',
    '"The request has been fulfilled and resulted in a new resource being created."' => '"该请求已完成, 并导致创建了一个新资源."',

    // 202
    '"Accepted"' => '"已接受"',
    '"The request has been accepted for processing, but the processing has not been completed. The request might or might not eventually be acted upon, as it might be disallowed when processing actually takes place."' => '"该请求已被接受进行处理, 但是处理尚未完成. 该请求最终可能会执行, 也可能不会执行, 因为在实际进行处理时, 请求可能被禁止."',

    // 203
    '"Non-Authoritative Information"' => '"非权威信息"',
    '"Non-Authoritative Information (since HTTP/1.1)"' => '"非权威信息(since HTTP/1.1)"',
    '"The server successfully processed the request, but is returning information that may be from another source."' => '"服务器成功处理了请求, 但返回的信息可能来自其他来源."',

    // 204
    '"No Content"' => '"无内容"',
    '"The server successfully processed the request, but is not returning any content."' => '"服务器成功处理了请求, 但未返回任何内容."',

    // 205
    '"Reset Content"' => '"重置内容"',
    '"The server successfully processed the request, but is not returning any content. Unlike a 204 response, this response requires that the requester reset the document view."' => '"服务器成功处理了请求, 但未返回任何内容. 与 204 响应不同, 此响应要求请求者重置文档视图."',

    // 206
    '"Partial Content"' => '"部分内容"',
    '"The server is delivering only part of the resource due to a range header sent by the client. The range header is used by tools like wget to enable resuming of interrupted downloads, or split a download into multiple simultaneous streams"' => '"由于客户端发送了范围头, 因此服务器仅传递部分资源. 范围头被 wget 等工具用来恢复中断的下载, 或者将一个下载分成多个同时进行的流"',

    // 207
    '"Multi-Status"' => '"多状态"',
    '"Multi-Status (WebDAV) (RFC 4918)"' => '"多状态(WebDAV) (RFC 4918)"',
    '"The message body that follows is an XML message and can contain a number of separate response codes, depending on how many sub-requests were made."' => '"后面的消息主体是 XML 消息, 并且可以包含许多单独的响应代码, 具体取决于发出多少子请求."',

    // 208
    '"Already Reported"' => '"已报告"',
    '"Already Reported (WebDAV) (RFC 5842)"' => '"已报告(WebDAV) (RFC 5842)"',
    '"The members of a DAV binding have already been enumerated in a previous reply to this request, and are not being included again."' => '"DAV 绑定的成员已经在对该请求的先前答复中被枚举, 并且不再被包括在内."',

    // 226
    '"IM Used"' => '"IM 已使用"',
    '"IM Used (RFC 3229)"' => '"IM 已使用(RFC 3229)"',
    '"The server has fulfilled a GET request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance. "' => '"服务器已完成对资源的 GET 请求, 并且响应表示应用于当前实例的一个或多个实例操作的结果."',

    // 300
    '"Multiple Choices"' => '"多项选择"',
    '"Indicates multiple options for the resource that the client may follow. It, for instance, could be used to present different format options for video, list files with different extensions, or word sense disambiguation."' => '"指示客户端可以遵循的资源的多个选项. 例如, 它可以用于呈现视频的不同格式选项, 具有不同扩展名的列表文件或消除词义歧义."',

    // 301
    '"Moved Permanently"' => '"永久移动到"',
    '"This and all future requests should be directed to the given URI."' => '"此请求和所有将来的请求都应定向到给定的 URI."',

    // 302
    '"Found"' => '"已找到"',
    '"This is an example of industrial practice contradicting the standard. HTTP/1.0 specification (RFC 1945) required the client to perform a temporary redirect (the original describing phrase was \\\"Moved Temporarily\\\"), but popular browsers implemented 302 with the functionality of a 303. Therefore, HTTP/1.1 added status codes 303 and 307 to distinguish between the two behaviours. However, some Web applications and frameworks use the 302 status code as if it were the 303."' => '"这是与标准相矛盾的工业实践的一个例子. HTTP/1.0 规范(RFC 1945)要求客户端执行临时重定向(原始描述短语为\\\"临时移动\\\"), 但是流行的浏览器使用 303 的功能实现了 302. 因此,HTTP/1.1 添加了状态码 303 和 307 来区分这两种行为. 但是, 某些 Web 应用程序和框架使用 302 状态码就像使用 303."',

    // 303
    '"See Other"' => '"看其他"',
    '"The response to the request can be found under another URI using a GET method. When received in response to a POST (or PUT/DELETE), it should be assumed that the server has received the data and the redirect should be issued with a separate GET message."' => '"可以使用 GET 方法在另一个 URI 下找到对请求的响应. 当收到响应 POST(或 PUT/DELETE)的响应时, 应假定服务器已接收到数据, 并且应该使用单独的 GET 消息发布重定向."',

    // 304
    '"Not Modified"' => '"未修改"',
    '"Indicates the resource has not been modified since last requested. Typically, the HTTP client provides a header like the If-Modified-Since header to provide a time against which to compare. Using this saves bandwidth and reprocessing on both the server and client, as only the header data must be sent and received in comparison to the entirety of the page being re-processed by the server, then sent again using more bandwidth of the server and client."' => '"指示自上次请求以来尚未修改资源. 通常,HTTP 客户端提供类似于 If-Modified-Since 头的头, 以提供比较的时间. 使用此功能可以节省带宽和在服务器和客户端上进行重新处理, 因为与服务器正在重新处理的整个页面相比, 只发送和接收头数据, 然后使用服务器和客户端上的更多带宽再次发送."',

    // 305
    '"Use Proxy"' => '"使用代理"',
    '"Use Proxy (since HTTP/1.1)"' => '"使用代理(since HTTP/1.1)"',
    '"Many HTTP clients (such as Mozilla and Internet Explorer) do not correctly handle responses with this status code, primarily for security reasons."' => '"主要出于安全原因, 许多 HTTP 客户端(例如 Mozilla 和 Internet Explorer)不能正确处理带有此状态码的响应."',

    // 306
    '"Switch Proxy"' => '"切换代理"',
    '"No longer used. Originally meant \\\"Subsequent requests should use the specified proxy.\\\""' => '"不再使用. 最初的意思是\\\"后续请求应使用指定的代理\\\""',

    // 307
    '"Temporary Redirect"' => '"临时重定向"',
    '"Temporary Redirect (since HTTP/1.1)"' => '"临时重定向(since HTTP/1.1)"',
    '"In this occasion, the request should be repeated with another URI, but future requests can still use the original URI. In contrast to 303, the request method should not be changed when reissuing the original request. For instance, a POST request must be repeated using another POST request."' => '"在这种情况下, 应该使用另一个 URI 重复该请求, 但是以后的请求仍可以使用原始 URI. 与 303 相反, 重新发出原始请求时, 不应更改请求方法. 例如, 必须使用另一个 POST 请求重复 POST 请求."',

    // 308
    '"Resume Incomplete"' => '"恢复不完整"',
//    '"This code is used in the Resumable HTTP Requests Proposal to resume aborted PUT or POST requests."' =>
//        '"此代码用于可恢复 HTTP 请求建议, 以恢复中止的 PUT 或 POST 请求."',
    '"Permanent Redirect"' => '"永久重定向"',

    // 400
    '"Bad Request"' => '"错误的请求"',
    '"The request cannot be fulfilled due to bad syntax."' => '"由于语法错误, 请求无法完成."',

    // 401
    '"Unauthorized"' => '"未经授权"',
    '"Similar to 403 Forbidden, but specifically for use when authentication is possible but has failed or not yet been provided. The response must include a WWW-Authenticate header field containing a challenge applicable to the requested resource."' => '"与 403 Forbidden(禁止)相似, 但专门用于可能进行身份验证但已失败或尚未提供身份验证的情况. 响应必须包含一个 WWW-Authenticate 头字段, 其中包含适用于所请求资源的质询."',

    // 402
    '"Payment Required"' => '"需要付款"',
    '"Reserved for future use. The original intention was that this code might be used as part of some form of digital cash or micropayment scheme, but that has not happened, and this code is not usually used. As an example of its use, however, Apple\\\'s MobileMe service generates a 402 error (\\\"httpStatusCode:402\\\" in the Mac OS X Console log) if the MobileMe account is delinquent."' => '"保留以备将来使用. 最初的意图是将该代码用作某种形式的数字现金或小额支付方案的一部分, 但这并未发生, 因此通常不使用此代码. 但是, 作为其使用示例, 如果 MobileMe 账户欠款,Apple 的 MobileMe 服务会生成 402 错误(在 Mac OS X 控制台日志中为\\\"httpStatusCode:402\\\")."',

    // 403
    '"Forbidden"' => '"禁止"',
    '"The request was a legal request, but the server is refusing to respond to it. Unlike a 401 Unauthorized response, authenticating will make no difference."' => '"该请求是合法请求, 但是服务器拒绝响应. 与 401 Unauthorized(未经授权)的响应不同, 身份验证没有任何区别."',

    // 404
    '"Not Found"' => '"找不到"',
    '"The requested resource could not be found but may be available again in the future. Subsequent requests by the client are permissible."' => '"找不到请求的资源, 但将来可能再次可用. 客户的后续请求是允许的."',

    // 405
    '"Method Not Allowed"' => '"方法不被允许"',
    '"A request was made of a resource using a request method not supported by that resource; for example, using GET on a form which requires data to be presented via POST, or using PUT on a read-only resource."' => '"使用资源不支持的请求方法对资源进行了请求. 例如, 在需要通过 POST 呈现数据的表单上使用 GET, 或在只读资源上使用 PUT."',

    // 406
    '"Not Acceptable"' => '"不接受"',
    '"The requested resource is only capable of generating content not acceptable according to the Accept headers sent in the request."' => '"根据请求中发送的 Accept 头, 所请求的资源只能生成不可接受的内容."',

    // 407
    '"Proxy Authentication Required"' => '"需要代理身份验证"',
    '"The client must first authenticate itself with the proxy."' => '"客户端必须首先使用代理对其进行身份验证."',

    // 408
    '"Request Timeout"' => '"请求超时"',
    '"The server timed out waiting for the request. According to W3 HTTP specifications: \\\"The client did not produce a request within the time that the server was prepared to wait. The client MAY repeat the request without modifications at any later time.\\\""' => '"服务器超时, 等待请求. 根据 W3 HTTP 规范: \\\"客户端在服务器准备等待的时间内没有产生请求. 客户端可以在以后的任何时间重复请求而无需进行修改.\\\""',

    // 409
    '"Conflict"' => '"冲突"',
    '"Indicates that the request could not be processed because of conflict in the request, such as an edit conflict."' => '"表示由于请求中的冲突(例如编辑冲突)而无法处理该请求."',

    // 410
    '"Gone"' => '"消失了"',
    '"Indicates that the resource requested is no longer available and will not be available again. This should be used when a resource has been intentionally removed and the resource should be purged. Upon receiving a 410 status code, the client should not request the resource again in the future. Clients such as search engines should remove the resource from their indices. Most use cases do not require clients and search engines to purge the resource, and a \\\"404 Not Found\\\" may be used instead."' => '"指示请求的资源不再可用, 并且将不再可用. 当故意删除资源并清除该资源时, 应使用此方法. 收到 410 状态码后, 客户端以后不应再请求资源. 诸如搜索引擎之类的客户端应从其索引中删除资源. 大多数用例不需要客户端和搜索引擎清除资源, 而是可以使用\\\"404 Not Found(找不到)\\\"代替."',

    // 411
    '"Length Required"' => '"要求长度指示"',
    '"The request did not specify the length of its content, which is required by the requested resource."' => '"该请求未指定其内容的长度, 这是所请求的资源所必需的."',

    // 412
    '"Precondition Failed"' => '"先决条件失败"',
    '"The server does not meet one of the preconditions that the requester put on the request."' => '"服务器不满足请求者对请求设置的先决条件之一."',

    // 413
    '"Payload Too Large"' => '"负载过大"',
    '"Request Entity Too Large"' => '"请求的实体太大"',
    '"The request is larger than the server is willing or able to process."' => '"该请求大于服务器愿意或能够处理的请求."',

    // 414
    '"URI Too Long"' => '"URI 太长"',
    '"Request-URI Too Long"' => '"请求 URI 太长"',
    '"The URI provided was too long for the server to process."' => '"提供的 URI 太长, 服务器无法处理."',

    // 415
    '"Unsupported Media Type"' => '"不支持的媒体类型"',
    '"The request entity has a media type which the server or resource does not support. For example, the client uploads an image as image/svg+xml, but the server requires that images use a different format."' => '"请求实体具有服务器或资源不支持的媒体类型. 例如, 客户端将图像上传为 image/svg+xml, 但是服务器要求图像使用其他格式."',

    // 416
    '"Range Not Satisfiable"' => '"范围无法满足"',
    '"Requested Range Not Satisfiable"' => '"所请求的范围无法满足"',
    '"The client has asked for a portion of the file, but the server cannot supply that portion. For example, if the client asked for a part of the file that lies beyond the end of the file."' => '"客户端要求提供文件的一部分, 但是服务器无法提供该部分. 例如, 如果客户要求文件的一部分超出文件末尾."',

    // 417
    '"Expectation Failed"' => '"预期结果失败"',
    '"The server cannot meet the requirements of the Expect request-header field."' => '"服务器不能满足 Expect 请求头字段的要求."',

    // 418
    '"I\'m a teapot"' => '"我是一个茶壶"',
    '"I\'m a teapot (RFC 2324)"' => '"我是一个茶壶(RFC 2324)"',
    '"I\\\'m a teapot (RFC 2324)"' => '"我是一个茶壶(RFC 2324)"',
    '"This code was defined in 1998 as one of the traditional IETF April Fools\\\' jokes, in RFC 2324, Hyper Text Coffee Pot Control Protocol, and is not expected to be implemented by actual HTTP servers. However, known implementations do exist."' => '"该代码在 1998 年被定义为 RFC 2324 中的传统 IETF 愚人节笑话之一, 超文本咖啡壶控制协议, 并且预计不会由实际的 HTTP 服务器实现. 但是, 确实存在已知的实现."',
    '"This code was defined in 1998 as one of the traditional IETF April Fools\' jokes, in RFC 2324, Hyper Text Coffee Pot Control Protocol, and is not expected to be implemented by actual HTTP servers. However, known implementations do exist."' => '"该代码在 1998 年被定义为 RFC 2324 中的传统 IETF 愚人节笑话之一, 超文本咖啡壶控制协议, 并且预计不会由实际的 HTTP 服务器实现. 但是, 确实存在已知的实现."',


    // 422
    '"Unprocessable Entity"' => '"无法处理的实体"',
    '"Unprocessable Entity (WebDAV) (RFC 4918)"' => '"无法处理的实体(WebDAV) (RFC 4918)"',
    '"The request was well-formed but was unable to be followed due to semantic errors."' => '"该请求格式正确, 但由于语义错误而无法执行."',

    // 423
    '"Locked"' => '"锁定"',
    '"Locked (WebDAV) (RFC 4918)"' => '"锁定(WebDAV) (RFC 4918)"',
    '"The resource that is being accessed is locked."' => '"正在访问的资源被锁定."',

    // 424
    '"Failed Dependency"' => '"依赖失败"',
    '"Failed Dependency (WebDAV) (RFC 4918)"' => '"依赖失败(WebDAV) (RFC 4918)"',
    '"The request failed due to failure of a previous request (e.g. a PROPPATCH)."' => '"由于前一个请求(例如: 一个 PROPPATCH)失败, 因此请求失败."',

    // 425
    '"Unordered Collection"' => '"无序集合"',
    '"Unordered Collection (RFC 3648)"' => '"无序集合(RFC 3648)"',
    '"Defined in drafts of \\\"WebDAV Advanced Collections Protocol\\\",[14] but not present in \\\"Web Distributed Authoring and Versioning (WebDAV) Ordered Collections Protocol\\\".[15]"' => '"在\\\"WebDAV 高级集合协议\\\"[14]的草稿中定义, 但在\\\"Web 分布式创作和版本控制(WebDAV)有序集合协议\\\"[15]中不存在."',

    // 426
    '"Upgrade Required"' => '"需要升级"',
    '"Upgrade Required (RFC 2817)"' => '"需要升级(RFC 2817)"',
    '"The client should switch to a different protocol such as TLS/1.0."' => '"客户端应切换到其他协议, 例如 TLS/1.0."',

    // 428
    '"Precondition Required"' => '"需要先决条件"',
    '"The origin server requires the request to be conditional. Intended to prevent \\\"the \\\'lost update\\\' problem, where a client GETs a resource\\\'s state, modifies it, and PUTs it back to the server, when meanwhile a third party has modified the state on the server, leading to a conflict.\\\"[17] Proposed in an Internet-Draft."' => '"原始服务器要求该请求是有条件的. 旨在防止\\\"丢失更新\\\"问题, 即当第三方修改了服务器上的状态, 从而导致冲突时, 客户端获取资源的状态, 将其修改, 然后将其放回服务器. [17]在互联网草案中提出."',

    // 429
    '"Too Many Requests"' => '"请求太多"',
    '"The user has sent too many requests in a given amount of time. Intended for use with rate limiting schemes. Proposed in an Internet-Draft."' => '"用户在给定的时间内发送了太多请求. 用于速率限制方案. 在互联网草案中提出."',

    // 431
    '"Request Header Fields Too Large"' => '"请求头字段太大"',
    '"The server is unwilling to process the request because either an individual header field, or all the header fields collectively, are too large. Proposed in an Internet-Draft."' => '"该服务器不愿意处理该请求, 因为单个头字段或所有头字段加起来都太大了. 在互联网草案中提出."',

    // 444
    '"No Response"' => '"没有响应"',
    '"An nginx HTTP server extension. The server returns no information to the client and closes the connection (useful as a deterrent for malware)."' => '"一个 Nginx HTTP 服务器扩展. 服务器不向客户端返回任何信息, 并关闭连接(用于阻止恶意软件)."',

    // 449
    '"Retry With"' => '"重试随着"',
    '"A Microsoft extension. The request should be retried after performing the appropriate action."' => '"一个 Microsoft 扩展. 执行适当的操作后.应重试该请求."',

    // 450
    '"Blocked by Windows Parental Controls"' => '"被 Windows 家长控制阻止"',
    '"A Microsoft extension. This error is given when Windows Parental Controls are turned on and are blocking access to the given webpage."' => '"一个 Microsoft 扩展. 打开 Windows 家长控制并阻止访问给定网页时, 会出现此错误."',

    // 499
    '"Client Closed Request"' => '"客户端关闭请求"',
    '"An Nginx HTTP server extension. This code is introduced to log the case when the connection is closed by client while HTTP server is processing its request, making server unable to send the HTTP header back."' => '"一个 Nginx HTTP 服务器扩展. 引入此代码来记录 HTTP 服务器处理其请求时客户端关闭连接的情况, 从而使服务器无法发送 HTTP 头."',

    // 500
    '"Internal Server Error"' => '"内部服务器错误"',
    '"A generic error message, given when no more specific message is suitable."' => '"一个通用的错误消息, 当没有其他特定消息适合时给出."',

    // 501
    '"Not Implemented"' => '"未执行"',
    '"The server either does not recognise the request method, or it lacks the ability to fulfill the request."' => '"该服务器要么无法识别请求方法, 要么缺乏满足请求的能力."',

    // 502
    '"Bad Gateway"' => '"错误的网关"',
    '"The server was acting as a gateway or proxy and received an invalid response from the upstream server."' => '"该服务器充当网关或代理, 并从上游服务器收到无效响应."',

    // 503
    '"Service Unavailable"' => '"服务不可用"',
    '"The server is currently unavailable (because it is overloaded or down for maintenance). Generally, this is a temporary state."' => '"该服务器当前不可用(因为它已超载或已关闭以进行维护). 通常, 这是一个临时状态."',

    // 504
    '"Gateway Timeout"' => '"网关超时"',
    '"The server was acting as a gateway or proxy and did not receive a timely response from the upstream server."' => '"该服务器充当网关或代理, 没有及时收到上游服务器的响应."',

    // 505
    '"HTTP Version Not Supported"' => '"不支持的 HTTP 版本"',
    '"The server does not support the HTTP protocol version used in the request."' => '"该服务器不支持请求中使用的 HTTP 协议版本."',

    // 506
    '"Variant Also Negotiates"' => '"服务器存在内部配置错误"',
    '"Variant Also Negotiates (RFC 2295)"' => '"服务器存在内部配置错误(RFC 2295)"',
    '"Transparent content negotiation for the request results in a circular reference.[21]"' => '"请求的透明内容协商会导致循环引用.[21]"',

    // 507
    '"Insufficient Storage"' => '"存储空间不足"',
    '"Insufficient Storage (WebDAV) (RFC 4918)"' => '"存储空间不足(WebDAV) (RFC 4918)"',
    '"The server is unable to store the representation needed to complete the request."' => '"该服务器无法存储完成请求所需的表示形式."',

    // 508
    '"Loop Detected"' => '"检测到循环"',
    '"Loop Detected (WebDAV) (RFC 5842)"' => '"检测到循环(WebDAV) (RFC 5842)"',
    '"The server detected an infinite loop while processing the request (sent in lieu of 208)."' => '"该服务器在处理请求时检测到死循环(代替 208 发送)"',

    // 509
    '"Bandwidth Limit Exceeded"' => '"超出带宽限制"',
    '"Bandwidth Limit Exceeded (Apache bw/limited extension)"' => '"超出带宽限制(Apache bw/limited extension)"',
    '"This status code, while used by many servers, is not specified in any RFCs."' => '"虽然许多服务器都在使用此状态码, 但没有在任何 RFC 中指定."',

    // 510
    '"Not Extended"' => '"获取资源所需要的策略并没有被满足"',
    '"Not Extended (RFC 2774)"' => '"获取资源所需要的策略并没有被满足(RFC 2774)"',
    '"Further extensions to the request are required for the server to fulfill it.[22]"' => '"服务器必须满足该请求的附加扩展.[22]"',

    // 511
    '"Network Authentication Required"' => '"需要网络身份验证"',
    '"The client needs to authenticate to gain network access. Intended for use by intercepting proxies used to control access to the network (e.g. \\\"captive portals\\\" used to require agreement to Terms of Service before granting full Internet access via a Wi-Fi hotspot). Proposed in an Internet-Draft."' => '"客户端需要进行身份验证才能获得网络访问权限. 意图通过拦截代理来控制对网络的访问(例如: 用于在通过 Wi-Fi 热点授予完全互联网访问权限之前要求同意服务条款的\\\"强制门户\\\"). 在互联网草案中提出."',

    // 598
    '"Network read timeout error"' => '"网络读取超时错误"',
    '"This status code is not specified in any RFCs, but is used by some HTTP proxies to signal a network read timeout behind the proxy to a client in front of the proxy."' => '"此状态码未在任何 RFC 中指定, 但是某些 HTTP 代理使用此状态码向代理之前的客户端发送代理后的网络读取超时信号"',

    // 599
    '"Network connect timeout error[23]"' => '"网络连接超时错误[23]"',
    '"This status code is not specified in any RFCs, but is used by some HTTP proxies to signal a network connect timeout behind the proxy to a client in front of the proxy."' => '"此状态码未在任何 RFC 中指定, 但是某些 HTTP 代理使用此状态码向代理之前的客户端发送代理后的网络连接超时信号."',

    '"Misdirected Request"' => '"误导请求"',
    '"Unavailable For Legal Reasons"' => '"由于法律原因而无法使用"',
];