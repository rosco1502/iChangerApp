{"filter":false,"title":"alertApp.js","tooltip":"/2/js/alertApp.js","undoManager":{"mark":0,"position":0,"stack":[[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":0,"column":0},"end":{"row":0,"column":29}},"text":"var myApp = new Framework7();"},{"action":"insertText","range":{"start":{"row":0,"column":29},"end":{"row":1,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":1,"column":0},"end":{"row":22,"column":0}},"lines":[" ","var $$ = Dom7;"," ","$$('.alert-text').on('click', function () {","    myApp.alert('Here goes alert text');","});"," ","$$('.alert-text-title').on('click', function () {","    myApp.alert('Here goes alert text', 'Custom Title!');","});"," ","$$('.alert-text-title-callback').on('click', function () {","    myApp.alert('Here goes alert text', 'Custom Title!', function () {","        myApp.alert('Button clicked!')","    });","});"," ","$$('.alert-text-callback').on('click', function () {","    myApp.alert('Here goes alert text', function () {","        myApp.alert('Button clicked!')","    });"]},{"action":"insertText","range":{"start":{"row":22,"column":0},"end":{"row":22,"column":3}},"text":"});"}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":14,"column":38},"end":{"row":14,"column":38},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1411096918957,"hash":"b19d60fc95af172b7a6812cd756a47c8db2a366f"}