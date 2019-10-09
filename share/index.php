<?php
$hasExplicitTitle = isset($_REQUEST['title']);
$title = $hasExplicitTitle ? $_REQUEST['title'] : "DNArtwork";

$description = ($hasExplicitTitle ? "DNArtwork: " : "") . "Artwork created from your DNA";
?><!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title><?php echo htmlentities($title); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Sorts+Mill+Goudy" rel="stylesheet">
  <link href="/app.css" rel="stylesheet">
  <meta name="twitter:card" content="summary_large_image" />
  <meta property="og:image" content="https://dnartwork-render-image.azurewebsites.net/api/render-image?<?php echo htmlentities($_REQUEST['art']); ?>"/>
  <meta property="og:title" content="<?php echo htmlentities($title); ?>"/>
  <meta property="og:description" content="<?php echo htmlspecialchars($description); ?>"/>
  <script src="/app.js"></script>
  <script>require('initialize');</script>
</head>
<body>
  <div class="content-page content-page-no-header share-page">
    <div class="contained-content article-content">
      <?php if ($hasExplicitTitle) { ?>
        <h1 class="share-page-title"><?php echo htmlentities($title); ?></h1>
      <?php } ?>
      <p><img class="artwork-image" id="artwork-share-image" src="https://dnartwork-render-image.azurewebsites.net/api/render-image?<?php echo htmlentities($_REQUEST['art']); ?>" /></p>
      <?php if (isset($_REQUEST['message'])) { ?>
        <p><?php echo htmlentities($_REQUEST['message']); ?></p>
      <?php } ?>
    </div>
  </div>
</body>
</html>
