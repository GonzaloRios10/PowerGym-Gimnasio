function Ajax() {
  var url = '';
  var action = '';
  var data_response = new Array();
  var type = 'POST';
  var contentType = 'application/x-www-form-urlencoded; charset=UTF-8';
  var processData = true;

  this.setUrl = function setUrl(_url) {
    url = _url;
  }
  this.getUrl = function getUrl() {
    return url;
  }

  this.setAction = function setAction(_action) {
    action = _action;
  }
  this.getAction = function getAction() {
    return action;
  }

  this.setDataResponse = function setDataResponse(_data_response) {
    data_response.propt = _data_response;
  }
  this.getDataResponse = function getDataResponse(propt) {
    return data_response[propt];
  }

  this.setType = function setType(_type) {
    type = _type;
  }
  this.getType = function getType() {
    return type;
  }

  this.setContentType = function setContentType(_contentType) {
    contentType = _contentType;
  }
  this.getContentType = function getContentType() {
    return contentType;
  }

  this.setProcessData = function setProcessData(_processData) {
    processData = _processData;
  }
  this.getProcessData = function getProcessData() {
    return processData;
  }

  this.go = function go(obj) {
    console.log(obj);
    $.ajax({
      url: url,
      type: type,
      data: "data=" + JSON.stringify(obj.params),
      context: document.body,
      contentType: contentType,
      processData: processData,
      success: function(data) {
        console.log(data);
        if (typeof obj.function_response == 'function') {
          obj.function_response(data);
        }
      },
      error: function(xhr, status) {
        console.log(xhr);
      }
    });
  }
}