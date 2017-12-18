<?php
#!/usr/bin/env php

$phar = new Phar("project.phar");

$phar->startBuffering();

$defaultStub = $phar->createDefaultStub('command.php');

$phar->buildFromDirectory(dirname(__FILE__));

$stub = "#!/usr/bin/env php \n" . $defaultStub;

$phar->setStub($stub);

$phar->stopBuffering();