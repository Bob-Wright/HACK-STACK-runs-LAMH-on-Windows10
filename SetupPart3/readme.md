HACK-STACK Setup Part 3

Set up a sessions database for our stack.

We want to set up sessions handler database store using our mySQL server for our PHP sessions data.
The philosophy of why this might be of benefit is beyond our discussion, but there are various strong reasons that you might want to do this.

This requires a sessions handler function to interface the PHP with the sessions database. We use the Zebra_Session code which is described as:
"A drop-in replacement for PHP's default session handler which stores session data in a MySQL database, providing both better performance and
better security and protection against session fixation and session hijacking"
The code can be found on the Zebra_Session author's page.

It is suggested that you read over the tutorial completely before you begin performing the operations described. This tutorial assumes that you
have a LAMH stack set up as described in the two previous tutorials.
