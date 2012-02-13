var Slack = (function() {
    
    hideAndShowColumnElements: (function() {
        var columnElements = document.getElementsByClassName('column');

        var i = columnElements.length; 
        while(i--) {
            columnElements[i].getElementsByTagName('ul')[0].style.display = 'none';

            columnElements[i].addEventListener("click", function() {
                if (this.getElementsByTagName('ul')[0].style.display === 'none') {
                    this.getElementsByTagName('ul')[0].style.display = 'block';
                    return;
                }
                this.getElementsByTagName('ul')[0].style.display = 'none';
            })
        }
    })();
    
    inputFieldSearchOnKeyUp: (function() {
        var inputFields = document.getElementsByTagName('input');
        
        var i = inputFields.length;
        while (i--) {
            inputFields[i].addEventListener("keyup", function() {
                this.parentNode.parentNode.getElementsByTagName('ul')[0].style.display = 'block';
                
                var listItems         = this.parentNode.parentNode.getElementsByTagName('li');
                
                var ii = listItems.length;
                while (ii--) {
                    if (listItems[ii].innerHTML.indexOf(this.value) !== -1) {
                        listItems[ii].style.display = 'block';
                        continue;
                    }
                    listItems[ii].style.display = 'none';
                }
            })
        }
    })();

})();