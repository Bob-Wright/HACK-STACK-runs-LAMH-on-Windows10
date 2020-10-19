# HACK-STACK-runs-LAMH-on-Windows10
This tutorial explains how to set up and run a Bitnami Ubuntu 18.04 Linux, Apache, mySQL, and HHVM (LAMH) stack on a Windows 10 machine by using the Windows Subsystem for Linux (WSL). The use of WSL allows Linux to run alongside Windows 10 without the need for a second device or virtual machine. Setting up the LAMH stack this way offers three significant benefits to the user.

The first benefit is that the setup provides a nice development environment for a LAMH stack on a Windows machine. So for example, some change can be made to the stack or its contents and the result can be seen at the same time in a Chrome browser running on the Windows "machine". The user has access to the Linux command console within a window on the same screen.

The second benefit is that this approach creates an easy to reload or copy LAMH installation. By exporting a tarball archive backup of the setup it can easily be restored or reloaded to this baseline setup. Moreover, the tarball can be transported or copied to another Windows 10 machine and made to run the same setup on the target computer. So for example all the students in a class room could easily have identically the same baseline setup. Here at The Palace the same setup is running on a workstation and on a laptop.

The third benefit is that using the Bitnami Ubuntu HHVM stack in this environment provides a close approximation to what is presented by the same stack installed on Amazon Web Services (AWS) or a true standalone server.

I like writing code and I like learning how to write it. I want to learn HACK. This lets me do that on a local machine.

Information and Knowledge is Power. Power will get you Freedom, and Freedom is not negotiable. I have a huge debt of gratitude for all the tutorials and forums and blogs and Github sites that have helped me learn, and hopefully this tutorial will help me pay the debt forward by helping you. You should learn to code so that when the battle with the robots begins you will be equipped to be a winner.
