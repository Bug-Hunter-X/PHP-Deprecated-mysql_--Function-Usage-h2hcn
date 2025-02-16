# PHP Deprecated mysql_* Function Usage

This repository demonstrates a common error in PHP: the use of deprecated `mysql_*` functions for database interaction.  The `bug.php` file shows the problematic code. The `bugSolution.php` provides a secure and updated solution using MySQLi.

**Problem:** The `mysql_*` functions are deprecated and pose security risks.  They are no longer supported in modern PHP versions.

**Solution:** Migrate to either the MySQLi extension or the PDO extension for improved security and compatibility.