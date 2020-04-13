<? php
$ crontext = "Cron Run at" .date ("r"). "por". $ _ SERVER ['USER']. "\ n";
$ folder = substr ($ _SERVER ['SCRIPT_FILENAME'], 0, strrpos ($_ SERVER ['SCRIPT_FILENAME'], "/") + 1);
$ filename = $ pasta. "cron_test.txt";
$ fp = fopen ($ nome do arquivo, "a") ou dado ("Erro de abertura!");
fwrite ($ fp, $ crontext) ou die ("Erro de gravação!");
fclose ($ fp);
eco "Escreveu para". $ filename. "\ n \ n";