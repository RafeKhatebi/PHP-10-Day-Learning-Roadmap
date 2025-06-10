# PHP File Handling

### Introduction to File Handling

 • File handling in PHP is essential for various web development tasks

 • Storing data permanently (beyond script execution)

 • File handling refers to performing operations on files, such as:

    • Creating a file

    • Opening a file

    • Reading from a file

    • Writing to a file

    • Closing a file

    • Deleting a file

### Why File Handling?

 • File Handling can be more efficient in some use cases
• Even though, databases are generally more efficient for structured data storage
 • Simple read/write operations can be faster with flat files for small amounts of data
 • No database connection overhead for simple operations
 • Network handshake (even for localhost connections)
 • No authentication process • No network transfer of results
 • No Duration required for Query Processing
 • SQL parsing and validation
 • Query optimization
 • Not all environments have database servers available

### File Handling Use Cases

 • Managing configurations (settings, environment vars)
 • Logging & debugging (tracking errors, user activity)
 • Importing/exporting data (CSV, JSON)
 • Backup & recovery (database dumps)
 • Improving performance (caching)

### File Handling Functions

fopen(), fclose(),fputs() | fwrite(), fgetc(), fgets() ...

### Modes of opening files

r,r+,w,w+,a,a+,x,x+

'r' 	 Read-only. Starts from the beginning of the file. Returns Error if file does not exists
 'r+' 	Read and write. Starts from the beginning of the file, Returns Error if file does not exists
 'w' 	Write-only. Creates a new file if it does not exist. If it exists, truncates (clears) the file
 'w+'  Read and write. Truncates the file or creates a new one
'a' 	Append. Opens the file for writing, places pointer at the end. Creates file if it does not exist
 'a+'	 Read and append. Pointer is at the end of the file
 'x' 	Write-only. Creates a new file. If file exists, fopen() fails
 'x+'	 Read and write. Creates a new file. If file exists, fopen() fails

### High-Level File Functions

 file(), file_get_contents(), file_put_contents()

• PHP provides several convenient high-level file functions that handle
file operations with minimal code
 • Such as : file(), file_get_contents(), file_put_contents()
 • But they should Only be used with dealing with small files (specially
for reading)
 • Loads entire file into memory - Not ideal for very large files (>MBs)
 • Having less control since there is no mode specification

### Helper Functions

 file_exists(), is_dir(), mkdir(), copy(), rename(), filemtime(), filesize(),
filectime(), unlink(), rmdir()
