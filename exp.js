$('#zona').fileTree({
    root: "../SIMULATOR/",
    script: 'connector/jqueryFileTree.php'
},
    function (file) {
        $('#zonumerique').load(".//" + file)
        // openFile(file)
        // alert(file);
    });

    function createXHR() 
    {
      var request = false;
      try { request = new ActiveXObject('Msxml2.XMLHTTP'); }
      catch (err2) { 
        try { request = new ActiveXObject('Microsoft.XMLHTTP'); }
        catch (err3) {
        try { request = new XMLHttpRequest(); }
        catch (err1) {
          request = false;
       }
      }
     }
     return request;
    }
    
    function preloading(url)
    {
      var xhr=createXHR();   
      xhr.onreadystatechange=function()
      { 
        if(xhr.readyState == 4)
        {
          var content = xhr.responseText;
          var i = new Image();
          i.src = content;
        } 
      }; 
      xhr.open("GET", url , true);
      xhr.send(null); 
    }