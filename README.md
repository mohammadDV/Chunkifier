## Chunkifier

In this system I wrote a service for chunk the file in specific directory. I used chunk class and implement it with three function in it and also check the type of incoming file  (Normal,Sparse).
You can change two parameters in “config.php”:

1) file_size 			=> first file size = 1337 bytes
2) incrementalـnumber 	=> Each chunk should be 11 bytes larger than the previous chunk = 11 bytes

for executing this service it's enough you do these:
-	Command to run “php chunkifier.php File Directory”

## Docker image


## Project’s files:
1.  Chunk.php            in “/classes”
2.  helper.php           in “/”.
3.  config.php           in “/”.
4.  chunkifier.php       in “/”




