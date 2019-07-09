<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="semantic/semantic.css">
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="semantic/semantic.js"></script>
  <script type="text/javascript" src="semantic/components/dropdown.js"></script>
  <link rel="stylesheet" type="text/css" href="semantic/components/dropdown.css">
  <script type="text/javascript" src="script.js"></script>
  <meta charset="utf-8" />
  <style type="text/css">
    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
  </style>

  <script>
  $(document)
    .ready(function() {

      //Faz o menu ficar interativo com o mause.
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;
  </script>
</head>
<body>
<div class="pusher">
    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <div class="left item">
          <pre>
           </pre>
	        <a class="ui inverted button yellow">Marcar luta</a>
	        <a class="ui inverted button red">Lutar</a>
        </div>
        <div class="right item">
         	<a href="cadastraLutador.php" class="ui inverted button green">Cadastar Lutador</a>
        </div>
      </div>
    </div>
</div>	
</body>

</html>
