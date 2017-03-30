PPSSPP Website
==============

An abomination that grew over time.

Uses PHP as a static site generator for super fast serving.

Requirements: make, php.

To build, on any Unix-like platform:

    mkdir pub
    cd src
    make

The Makefile is not smart enough to copy over stuff like images etc yet to pub,
it only generates the html files.

Large binaries in src/files are not included.
