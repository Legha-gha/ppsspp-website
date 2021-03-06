<?php

function get_version_links($filename) {
	$filedir = "../pub/files";
	$handle = null;
	if (file_exists($filedir)) {
		$handle = opendir($filedir);
	}

  $dirs = array();

  if ($handle) {
    while (false !== ($entry = readdir($handle))) {
      if (strpos($entry, "_") !== false && strpos($entry, ".") === false) {
        if (file_exists("$filedir/$entry/$filename")) {
          # Don't add empty directories
          array_push($dirs, $entry);
        }
      }
    }

    closedir($handle);
  } else {
    return array();
  }

  rsort($dirs);

  $filtered = array();
  # Filter out obsolete sub versions
  $prev = null;
  foreach ($dirs as $dir) {
    if (substr($dir, 0, 3) != substr($prev, 0, 3))
      array_push($filtered, $dir);
    $prev = $dir;
  }

  $apk_links = array();

  foreach ($filtered as $folder) {
    $version = str_replace("_", ".", $folder);
    array_push($apk_links,
      array("href" => "files/$folder/$filename",
            "version" => $version));
  }

  return $apk_links;
}

# print_r(get_version_links("ppsspp.apk"));

?>
