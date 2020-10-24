HACK-STACK Setup Part 2
Set up some Folders, Files, and Users. Add an FTP server.

We want to set up a web site that will allow users to upload content that the site will
incorporate into web pages for display. We want to do this in a way that does not require us to trust users.

We need to control access to certain folders in such a way as to allow our code to write and read
website user uploaded content with several security considerations.

First, we do not allow any online user to upload any content to our DOCUMENT_ROOT

Second, since we do want to display uploaded user content we need to set up a place to upload and store the content.

Third, we need to set up access permissions and ownership for those upload directories

If this is done we can enjoy a more secure website and still allow the upload and display of user uploaded content.

Finally we will set up an FTP server on our LAMH stack.
