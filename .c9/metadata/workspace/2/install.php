{"filter":false,"title":"install.php","tooltip":"/2/install.php","undoManager":{"mark":100,"position":100,"stack":[[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":43,"column":0},"end":{"row":43,"column":1}},"text":"/"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":45,"column":1},"end":{"row":45,"column":2}},"text":"*"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":45,"column":0},"end":{"row":45,"column":1}},"text":"/"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":57,"column":1},"end":{"row":57,"column":2}},"text":"/"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":57,"column":0},"end":{"row":57,"column":1}},"text":"*"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":106,"column":7},"end":{"row":107,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":107,"column":0},"end":{"row":107,"column":51}},"text":"if ( strpos($ua,\"iphone\") || strpos($ua,\"ipad\") ) {"},{"action":"insertText","range":{"start":{"row":107,"column":51},"end":{"row":108,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":108,"column":0},"end":{"row":122,"column":0}},"lines":["   if ( strpos($ua,\"safari\") ) {","      //echo('<!--Running in safari on iPhone/iPad--><h1>To install iChanger 2 press <img src=\"http://ichanger.tk/ui/simages/dl.png\"> or <img src=\"http://ichanger.tk/ui/simages/plus.png\"> then select Add to Homescreen..');","   } else if ( substr_count($ua, '/') === 3 ) {","     header('Location: http://www.ichanger.tk/mainf7.php?dev=' . htmlspecialchars($_GET[\"dev\"]) . '&');","   } else if ( substr_count($ua, '/') === 2 ) {","      echo('Running in a WebView on a iPhone/iPad app');","   } else {","      echo('<!--Running in another browser on iPhone/iPad-->');","      header('Location: http://www.ichanger.tk/chrome.php');","   }","    } else {","        header('Location: http://www.thelocken.com/ichangerinfo/');","   echo('<!--Running on device other than iPhone/iPad.--><meta http-equiv=\"refresh\" content=\"0; url=http://www.thelocken.com/ichangerinfo/\" />');","    }"]}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":106,"column":7},"end":{"row":107,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":107,"column":0},"end":{"row":107,"column":1}},"text":"<"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":107,"column":1},"end":{"row":107,"column":2}},"text":"?"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":107,"column":2},"end":{"row":107,"column":3}},"text":"p"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":107,"column":3},"end":{"row":107,"column":4}},"text":"h"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":107,"column":4},"end":{"row":107,"column":5}},"text":"p"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":123,"column":0},"end":{"row":123,"column":1}},"text":"?"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":123,"column":1},"end":{"row":123,"column":2}},"text":">"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":117,"column":0},"end":{"row":117,"column":60}},"text":"      header('Location: http://www.ichanger.tk/chrome.php');"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":116,"column":63},"end":{"row":117,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":119,"column":0},"end":{"row":119,"column":67}},"text":"        header('Location: http://www.thelocken.com/ichangerinfo/');"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":118,"column":12},"end":{"row":119,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":118,"column":0},"end":{"row":118,"column":4}},"text":"    "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":118,"column":0},"end":{"row":118,"column":1}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":118,"column":1},"end":{"row":118,"column":2}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":118,"column":2},"end":{"row":118,"column":3}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":119,"column":3},"end":{"row":119,"column":4}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":119,"column":4},"end":{"row":119,"column":8}},"text":"    "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":119,"column":4},"end":{"row":119,"column":8}},"text":"    "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":119,"column":4},"end":{"row":119,"column":5}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":119,"column":5},"end":{"row":119,"column":6}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":120,"column":0},"end":{"row":120,"column":4}},"text":"    "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":120,"column":0},"end":{"row":120,"column":1}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":120,"column":1},"end":{"row":120,"column":2}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":120,"column":2},"end":{"row":120,"column":3}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":112,"column":5},"end":{"row":112,"column":103}},"text":"header('Location: http://www.ichanger.tk/mainf7.php?dev=' . htmlspecialchars($_GET[\"dev\"]) . '&');"},{"action":"insertText","range":{"start":{"row":112,"column":5},"end":{"row":112,"column":6}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":6},"end":{"row":112,"column":7}},"text":"c"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":7},"end":{"row":112,"column":8}},"text":"h"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":8},"end":{"row":112,"column":9}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":9},"end":{"row":112,"column":10}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":112,"column":9},"end":{"row":112,"column":10}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":9},"end":{"row":112,"column":11}},"text":"()"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":10},"end":{"row":112,"column":11}},"text":";"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":112,"column":10},"end":{"row":112,"column":11}},"text":";"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":10},"end":{"row":112,"column":12}},"text":"''"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":11},"end":{"row":112,"column":12}},"text":"S"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":12},"end":{"row":112,"column":13}},"text":"u"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":13},"end":{"row":112,"column":14}},"text":"c"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":14},"end":{"row":112,"column":15}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":15},"end":{"row":112,"column":16}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":16},"end":{"row":112,"column":17}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":17},"end":{"row":112,"column":18}},"text":"f"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":18},"end":{"row":112,"column":19}},"text":"u"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":19},"end":{"row":112,"column":20}},"text":"l"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":20},"end":{"row":112,"column":21}},"text":"y"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":21},"end":{"row":112,"column":22}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":112,"column":21},"end":{"row":112,"column":22}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":21},"end":{"row":112,"column":22}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":22},"end":{"row":112,"column":23}},"text":"I"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":23},"end":{"row":112,"column":24}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":112,"column":23},"end":{"row":112,"column":24}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":23},"end":{"row":112,"column":24}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":24},"end":{"row":112,"column":25}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":25},"end":{"row":112,"column":26}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":26},"end":{"row":112,"column":27}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":27},"end":{"row":112,"column":28}},"text":"l"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":28},"end":{"row":112,"column":29}},"text":"l"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":29},"end":{"row":112,"column":30}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":30},"end":{"row":112,"column":31}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":31},"end":{"row":112,"column":32}},"text":","}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":32},"end":{"row":112,"column":33}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":33},"end":{"row":112,"column":34}},"text":"L"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":34},"end":{"row":112,"column":35}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":35},"end":{"row":112,"column":36}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":112,"column":35},"end":{"row":112,"column":36}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":112,"column":34},"end":{"row":112,"column":35}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":112,"column":33},"end":{"row":112,"column":34}},"text":"L"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":112,"column":32},"end":{"row":112,"column":33}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":112,"column":31},"end":{"row":112,"column":32}},"text":","}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":31},"end":{"row":112,"column":32}},"text":"."}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":32},"end":{"row":112,"column":33}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":33},"end":{"row":112,"column":34}},"text":"L"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":34},"end":{"row":112,"column":35}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":35},"end":{"row":112,"column":36}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":36},"end":{"row":112,"column":37}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":37},"end":{"row":112,"column":38}},"text":"i"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":38},"end":{"row":112,"column":39}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":39},"end":{"row":112,"column":40}},"text":"g"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":40},"end":{"row":112,"column":41}},"text":"."}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":41},"end":{"row":112,"column":42}},"text":"."}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":42},"end":{"row":112,"column":43}},"text":"."}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":45},"end":{"row":112,"column":47}},"text":"''"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":46},"end":{"row":112,"column":47}},"text":";"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":112,"column":46},"end":{"row":112,"column":47}},"text":";"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":112,"column":45},"end":{"row":112,"column":47}},"text":"''"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":112,"column":45},"end":{"row":112,"column":46}},"text":";"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":50,"column":0},"end":{"row":50,"column":63}},"text":"      echo('<!--Running in another browser on iPhone/iPad-->');"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":49,"column":11},"end":{"row":50,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":54,"column":0},"end":{"row":54,"column":145}},"text":"   echo('<!--Running on device other than iPhone/iPad.--><meta http-equiv=\"refresh\" content=\"0; url=http://www.thelocken.com/ichangerinfo/\" />');"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":53,"column":67},"end":{"row":54,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":48,"column":0},"end":{"row":48,"column":56}},"text":"      echo('Running in a WebView on a iPhone/iPad app');"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":47,"column":47},"end":{"row":48,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":62,"column":59},"end":{"row":62,"column":60}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":62,"column":60},"end":{"row":62,"column":61}},"text":"2"}]}]]},"ace":{"folds":[],"scrolltop":1622,"scrollleft":0,"selection":{"start":{"row":117,"column":4},"end":{"row":117,"column":4},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1412490369000,"hash":"41ad90f3b977a6ab963357843b2c1cd7cc4fa797"}