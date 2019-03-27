
window.projectVersion = 'master';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:Vipps" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Vipps.html">Vipps</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Vipps_Ecommerce" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Vipps/Ecommerce.html">Ecommerce</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Vipps_Ecommerce_CustomerInfo" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Vipps/Ecommerce/CustomerInfo.html">CustomerInfo</a>                    </div>                </li>                            <li data-name="class:Vipps_Ecommerce_MerchantInfo" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Vipps/Ecommerce/MerchantInfo.html">MerchantInfo</a>                    </div>                </li>                            <li data-name="class:Vipps_Ecommerce_Payment" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Vipps/Ecommerce/Payment.html">Payment</a>                    </div>                </li>                            <li data-name="class:Vipps_Ecommerce_PaymentDetails" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Vipps/Ecommerce/PaymentDetails.html">PaymentDetails</a>                    </div>                </li>                            <li data-name="class:Vipps_Ecommerce_PaymentStatus" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Vipps/Ecommerce/PaymentStatus.html">PaymentStatus</a>                    </div>                </li>                            <li data-name="class:Vipps_Ecommerce_Transaction" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Vipps/Ecommerce/Transaction.html">Transaction</a>                    </div>                </li>                            <li data-name="class:Vipps_Ecommerce_TransactionInfo" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Vipps/Ecommerce/TransactionInfo.html">TransactionInfo</a>                    </div>                </li>                            <li data-name="class:Vipps_Ecommerce_TransactionLog" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Vipps/Ecommerce/TransactionLog.html">TransactionLog</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Vipps_Exception" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Vipps/Exception.html">Exception</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Vipps_Exception_VippsException" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Vipps/Exception/VippsException.html">VippsException</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Vipps_Traits" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Vipps/Traits.html">Traits</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Vipps_Traits_AmountMutator" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Vipps/Traits/AmountMutator.html">AmountMutator</a>                    </div>                </li>                            <li data-name="class:Vipps_Traits_ArrayLike" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Vipps/Traits/ArrayLike.html">ArrayLike</a>                    </div>                </li>                            <li data-name="class:Vipps_Traits_Debuggable" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Vipps/Traits/Debuggable.html">Debuggable</a>                    </div>                </li>                            <li data-name="class:Vipps_Traits_Getters" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Vipps/Traits/Getters.html">Getters</a>                    </div>                </li>                            <li data-name="class:Vipps_Traits_Immuteable" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Vipps/Traits/Immuteable.html">Immuteable</a>                    </div>                </li>                            <li data-name="class:Vipps_Traits_Setters" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Vipps/Traits/Setters.html">Setters</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:Vipps_Client" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Vipps/Client.html">Client</a>                    </div>                </li>                            <li data-name="class:Vipps_Config" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Vipps/Config.html">Config</a>                    </div>                </li>                            <li data-name="class:Vipps_Model" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Vipps/Model.html">Model</a>                    </div>                </li>                            <li data-name="class:Vipps_Response" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Vipps/Response.html">Response</a>                    </div>                </li>                            <li data-name="class:Vipps_Vipps" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Vipps/Vipps.html">Vipps</a>                    </div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "Vipps.html", "name": "Vipps", "doc": "Namespace Vipps"},{"type": "Namespace", "link": "Vipps/Ecommerce.html", "name": "Vipps\\Ecommerce", "doc": "Namespace Vipps\\Ecommerce"},{"type": "Namespace", "link": "Vipps/Exception.html", "name": "Vipps\\Exception", "doc": "Namespace Vipps\\Exception"},{"type": "Namespace", "link": "Vipps/Traits.html", "name": "Vipps\\Traits", "doc": "Namespace Vipps\\Traits"},
            
            {"type": "Class", "fromName": "Vipps", "fromLink": "Vipps.html", "link": "Vipps/Client.html", "name": "Vipps\\Client", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Vipps\\Client", "fromLink": "Vipps/Client.html", "link": "Vipps/Client.html#method___construct", "name": "Vipps\\Client::__construct", "doc": "&quot;Instantiates a new Client instance&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Client", "fromLink": "Vipps/Client.html", "link": "Vipps/Client.html#method_get", "name": "Vipps\\Client::get", "doc": "&quot;Peforms HTTP GET&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Client", "fromLink": "Vipps/Client.html", "link": "Vipps/Client.html#method_post", "name": "Vipps\\Client::post", "doc": "&quot;Peforms HTTP POST&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Client", "fromLink": "Vipps/Client.html", "link": "Vipps/Client.html#method_put", "name": "Vipps\\Client::put", "doc": "&quot;Peforms HTTP PUT&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Client", "fromLink": "Vipps/Client.html", "link": "Vipps/Client.html#method_delete", "name": "Vipps\\Client::delete", "doc": "&quot;Peforms HTTP DELETE&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Client", "fromLink": "Vipps/Client.html", "link": "Vipps/Client.html#method_patch", "name": "Vipps\\Client::patch", "doc": "&quot;Peforms HTTP PATCH&quot;"},
            
            {"type": "Class", "fromName": "Vipps", "fromLink": "Vipps.html", "link": "Vipps/Config.html", "name": "Vipps\\Config", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Vipps\\Config", "fromLink": "Vipps/Config.html", "link": "Vipps/Config.html#method_create", "name": "Vipps\\Config::create", "doc": "&quot;Creates a new configuration object&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Config", "fromLink": "Vipps/Config.html", "link": "Vipps/Config.html#method_getEndpoint", "name": "Vipps\\Config::getEndpoint", "doc": "&quot;Retrieves the Vipps API endpoint&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Config", "fromLink": "Vipps/Config.html", "link": "Vipps/Config.html#method_setEndpoint", "name": "Vipps\\Config::setEndpoint", "doc": "&quot;Sets the Vipps API endpoint&quot;"},
            
            {"type": "Class", "fromName": "Vipps\\Ecommerce", "fromLink": "Vipps/Ecommerce.html", "link": "Vipps/Ecommerce/CustomerInfo.html", "name": "Vipps\\Ecommerce\\CustomerInfo", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "Vipps\\Ecommerce", "fromLink": "Vipps/Ecommerce.html", "link": "Vipps/Ecommerce/MerchantInfo.html", "name": "Vipps\\Ecommerce\\MerchantInfo", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Vipps\\Ecommerce\\MerchantInfo", "fromLink": "Vipps/Ecommerce/MerchantInfo.html", "link": "Vipps/Ecommerce/MerchantInfo.html#method___construct", "name": "Vipps\\Ecommerce\\MerchantInfo::__construct", "doc": "&quot;Instantiates a Model&quot;"},
            
            {"type": "Class", "fromName": "Vipps\\Ecommerce", "fromLink": "Vipps/Ecommerce.html", "link": "Vipps/Ecommerce/Payment.html", "name": "Vipps\\Ecommerce\\Payment", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Vipps\\Ecommerce\\Payment", "fromLink": "Vipps/Ecommerce/Payment.html", "link": "Vipps/Ecommerce/Payment.html#method___construct", "name": "Vipps\\Ecommerce\\Payment::__construct", "doc": "&quot;Instantiates a Payment&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Ecommerce\\Payment", "fromLink": "Vipps/Ecommerce/Payment.html", "link": "Vipps/Ecommerce/Payment.html#method_charge", "name": "Vipps\\Ecommerce\\Payment::charge", "doc": "&quot;Charges the payment reserves or captures depending on Vipps account&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Ecommerce\\Payment", "fromLink": "Vipps/Ecommerce/Payment.html", "link": "Vipps/Ecommerce/Payment.html#method_status", "name": "Vipps\\Ecommerce\\Payment::status", "doc": "&quot;Retrieves the Payment status&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Ecommerce\\Payment", "fromLink": "Vipps/Ecommerce/Payment.html", "link": "Vipps/Ecommerce/Payment.html#method_details", "name": "Vipps\\Ecommerce\\Payment::details", "doc": "&quot;Retrieves the Payment details&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Ecommerce\\Payment", "fromLink": "Vipps/Ecommerce/Payment.html", "link": "Vipps/Ecommerce/Payment.html#method_capture", "name": "Vipps\\Ecommerce\\Payment::capture", "doc": "&quot;Captures a payment by orderId&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Ecommerce\\Payment", "fromLink": "Vipps/Ecommerce/Payment.html", "link": "Vipps/Ecommerce/Payment.html#method_cancel", "name": "Vipps\\Ecommerce\\Payment::cancel", "doc": "&quot;Cancels a payment by orderId&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Ecommerce\\Payment", "fromLink": "Vipps/Ecommerce/Payment.html", "link": "Vipps/Ecommerce/Payment.html#method_refund", "name": "Vipps\\Ecommerce\\Payment::refund", "doc": "&quot;Refunds a payment by orderId&quot;"},
            
            {"type": "Class", "fromName": "Vipps\\Ecommerce", "fromLink": "Vipps/Ecommerce.html", "link": "Vipps/Ecommerce/PaymentDetails.html", "name": "Vipps\\Ecommerce\\PaymentDetails", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Vipps\\Ecommerce\\PaymentDetails", "fromLink": "Vipps/Ecommerce/PaymentDetails.html", "link": "Vipps/Ecommerce/PaymentDetails.html#method_retrieve", "name": "Vipps\\Ecommerce\\PaymentDetails::retrieve", "doc": "&quot;Retrieves a PaymentDetails&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Ecommerce\\PaymentDetails", "fromLink": "Vipps/Ecommerce/PaymentDetails.html", "link": "Vipps/Ecommerce/PaymentDetails.html#method_setTransactionLogHistory", "name": "Vipps\\Ecommerce\\PaymentDetails::setTransactionLogHistory", "doc": "&quot;Sets the transactionLogHistoru&quot;"},
            
            {"type": "Class", "fromName": "Vipps\\Ecommerce", "fromLink": "Vipps/Ecommerce.html", "link": "Vipps/Ecommerce/PaymentStatus.html", "name": "Vipps\\Ecommerce\\PaymentStatus", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Vipps\\Ecommerce\\PaymentStatus", "fromLink": "Vipps/Ecommerce/PaymentStatus.html", "link": "Vipps/Ecommerce/PaymentStatus.html#method___construct", "name": "Vipps\\Ecommerce\\PaymentStatus::__construct", "doc": "&quot;Instantiates a PaymentStatus&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Ecommerce\\PaymentStatus", "fromLink": "Vipps/Ecommerce/PaymentStatus.html", "link": "Vipps/Ecommerce/PaymentStatus.html#method_retrieve", "name": "Vipps\\Ecommerce\\PaymentStatus::retrieve", "doc": "&quot;Retrieves a PaymentStatus&quot;"},
            
            {"type": "Class", "fromName": "Vipps\\Ecommerce", "fromLink": "Vipps/Ecommerce.html", "link": "Vipps/Ecommerce/Transaction.html", "name": "Vipps\\Ecommerce\\Transaction", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Vipps\\Ecommerce\\Transaction", "fromLink": "Vipps/Ecommerce/Transaction.html", "link": "Vipps/Ecommerce/Transaction.html#method_create", "name": "Vipps\\Ecommerce\\Transaction::create", "doc": "&quot;Creates a Transaction&quot;"},
            
            {"type": "Class", "fromName": "Vipps\\Ecommerce", "fromLink": "Vipps/Ecommerce.html", "link": "Vipps/Ecommerce/TransactionInfo.html", "name": "Vipps\\Ecommerce\\TransactionInfo", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "Vipps\\Ecommerce", "fromLink": "Vipps/Ecommerce.html", "link": "Vipps/Ecommerce/TransactionLog.html", "name": "Vipps\\Ecommerce\\TransactionLog", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Vipps\\Ecommerce\\TransactionLog", "fromLink": "Vipps/Ecommerce/TransactionLog.html", "link": "Vipps/Ecommerce/TransactionLog.html#method_getOperationSuccess", "name": "Vipps\\Ecommerce\\TransactionLog::getOperationSuccess", "doc": "&quot;Gets the operationSuccess&quot;"},
            
            {"type": "Class", "fromName": "Vipps\\Exception", "fromLink": "Vipps/Exception.html", "link": "Vipps/Exception/VippsException.html", "name": "Vipps\\Exception\\VippsException", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Vipps\\Exception\\VippsException", "fromLink": "Vipps/Exception/VippsException.html", "link": "Vipps/Exception/VippsException.html#method___construct", "name": "Vipps\\Exception\\VippsException::__construct", "doc": "&quot;Instantiates a VippsException&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Exception\\VippsException", "fromLink": "Vipps/Exception/VippsException.html", "link": "Vipps/Exception/VippsException.html#method_getResponse", "name": "Vipps\\Exception\\VippsException::getResponse", "doc": "&quot;Get the response object&quot;"},
            
            {"type": "Class", "fromName": "Vipps", "fromLink": "Vipps.html", "link": "Vipps/Model.html", "name": "Vipps\\Model", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Vipps\\Model", "fromLink": "Vipps/Model.html", "link": "Vipps/Model.html#method___construct", "name": "Vipps\\Model::__construct", "doc": "&quot;Instantiates a Model&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Model", "fromLink": "Vipps/Model.html", "link": "Vipps/Model.html#method_create", "name": "Vipps\\Model::create", "doc": "&quot;Creates a new Model&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Model", "fromLink": "Vipps/Model.html", "link": "Vipps/Model.html#method_jsonSerialize", "name": "Vipps\\Model::jsonSerialize", "doc": "&quot;Overrides the json serialization of the object&quot;"},
            
            {"type": "Class", "fromName": "Vipps", "fromLink": "Vipps.html", "link": "Vipps/Response.html", "name": "Vipps\\Response", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Vipps\\Response", "fromLink": "Vipps/Response.html", "link": "Vipps/Response.html#method___construct", "name": "Vipps\\Response::__construct", "doc": "&quot;Instantiates a Model&quot;"},
            
            {"type": "Trait", "fromName": "Vipps\\Traits", "fromLink": "Vipps/Traits.html", "link": "Vipps/Traits/AmountMutator.html", "name": "Vipps\\Traits\\AmountMutator", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Vipps\\Traits\\AmountMutator", "fromLink": "Vipps/Traits/AmountMutator.html", "link": "Vipps/Traits/AmountMutator.html#method_setAmount", "name": "Vipps\\Traits\\AmountMutator::setAmount", "doc": "&quot;Sets the amount&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Traits\\AmountMutator", "fromLink": "Vipps/Traits/AmountMutator.html", "link": "Vipps/Traits/AmountMutator.html#method_getAmount", "name": "Vipps\\Traits\\AmountMutator::getAmount", "doc": "&quot;Retrieves the amount&quot;"},
            
            {"type": "Trait", "fromName": "Vipps\\Traits", "fromLink": "Vipps/Traits.html", "link": "Vipps/Traits/ArrayLike.html", "name": "Vipps\\Traits\\ArrayLike", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Vipps\\Traits\\ArrayLike", "fromLink": "Vipps/Traits/ArrayLike.html", "link": "Vipps/Traits/ArrayLike.html#method_offsetSet", "name": "Vipps\\Traits\\ArrayLike::offsetSet", "doc": "&quot;Sets the value at offset&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Traits\\ArrayLike", "fromLink": "Vipps/Traits/ArrayLike.html", "link": "Vipps/Traits/ArrayLike.html#method_offsetExists", "name": "Vipps\\Traits\\ArrayLike::offsetExists", "doc": "&quot;Checks if the offset exists&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Traits\\ArrayLike", "fromLink": "Vipps/Traits/ArrayLike.html", "link": "Vipps/Traits/ArrayLike.html#method_offsetUnset", "name": "Vipps\\Traits\\ArrayLike::offsetUnset", "doc": "&quot;Unsets the value offset&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Traits\\ArrayLike", "fromLink": "Vipps/Traits/ArrayLike.html", "link": "Vipps/Traits/ArrayLike.html#method_offsetGet", "name": "Vipps\\Traits\\ArrayLike::offsetGet", "doc": "&quot;Gets the value at offset&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Traits\\ArrayLike", "fromLink": "Vipps/Traits/ArrayLike.html", "link": "Vipps/Traits/ArrayLike.html#method_toArray", "name": "Vipps\\Traits\\ArrayLike::toArray", "doc": "&quot;Casts the model to an Array&quot;"},
            
            {"type": "Trait", "fromName": "Vipps\\Traits", "fromLink": "Vipps/Traits.html", "link": "Vipps/Traits/Debuggable.html", "name": "Vipps\\Traits\\Debuggable", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Vipps\\Traits\\Debuggable", "fromLink": "Vipps/Traits/Debuggable.html", "link": "Vipps/Traits/Debuggable.html#method___debugInfo", "name": "Vipps\\Traits\\Debuggable::__debugInfo", "doc": "&quot;Magic method to customize debug info&quot;"},
            
            {"type": "Trait", "fromName": "Vipps\\Traits", "fromLink": "Vipps/Traits.html", "link": "Vipps/Traits/Getters.html", "name": "Vipps\\Traits\\Getters", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Vipps\\Traits\\Getters", "fromLink": "Vipps/Traits/Getters.html", "link": "Vipps/Traits/Getters.html#method___get", "name": "Vipps\\Traits\\Getters::__get", "doc": "&quot;Magic method to handle getters&quot;"},
            
            {"type": "Trait", "fromName": "Vipps\\Traits", "fromLink": "Vipps/Traits.html", "link": "Vipps/Traits/Immuteable.html", "name": "Vipps\\Traits\\Immuteable", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Vipps\\Traits\\Immuteable", "fromLink": "Vipps/Traits/Immuteable.html", "link": "Vipps/Traits/Immuteable.html#method_immuteable", "name": "Vipps\\Traits\\Immuteable::immuteable", "doc": "&quot;Sets the immuteable flag. Can not be disabled once enabled&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Traits\\Immuteable", "fromLink": "Vipps/Traits/Immuteable.html", "link": "Vipps/Traits/Immuteable.html#method_mutate", "name": "Vipps\\Traits\\Immuteable::mutate", "doc": "&quot;Performs the mutation if not immuteable&quot;"},
            
            {"type": "Trait", "fromName": "Vipps\\Traits", "fromLink": "Vipps/Traits.html", "link": "Vipps/Traits/Setters.html", "name": "Vipps\\Traits\\Setters", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Vipps\\Traits\\Setters", "fromLink": "Vipps/Traits/Setters.html", "link": "Vipps/Traits/Setters.html#method___set", "name": "Vipps\\Traits\\Setters::__set", "doc": "&quot;Magic method to handle setters&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Traits\\Setters", "fromLink": "Vipps/Traits/Setters.html", "link": "Vipps/Traits/Setters.html#method_set", "name": "Vipps\\Traits\\Setters::set", "doc": "&quot;Set values in a builder pattern&quot;"},
            
            {"type": "Class", "fromName": "Vipps", "fromLink": "Vipps.html", "link": "Vipps/Vipps.html", "name": "Vipps\\Vipps", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Vipps\\Vipps", "fromLink": "Vipps/Vipps.html", "link": "Vipps/Vipps.html#method_getConfig", "name": "Vipps\\Vipps::getConfig", "doc": "&quot;Retrieves the global configuration&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Vipps", "fromLink": "Vipps/Vipps.html", "link": "Vipps/Vipps.html#method_setConfig", "name": "Vipps\\Vipps::setConfig", "doc": "&quot;Sets the global configuration&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Vipps", "fromLink": "Vipps/Vipps.html", "link": "Vipps/Vipps.html#method_getClient", "name": "Vipps\\Vipps::getClient", "doc": "&quot;Instatiates a new Client&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Vipps", "fromLink": "Vipps/Vipps.html", "link": "Vipps/Vipps.html#method_getUniqueID", "name": "Vipps\\Vipps::getUniqueID", "doc": "&quot;Utility method to generate a unique id&quot;"},
                    {"type": "Method", "fromName": "Vipps\\Vipps", "fromLink": "Vipps/Vipps.html", "link": "Vipps/Vipps.html#method_getTimestamp", "name": "Vipps\\Vipps::getTimestamp", "doc": "&quot;Utility method to get the current timestamp&quot;"},
            
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


