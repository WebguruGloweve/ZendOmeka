Media Quality (module for Omeka S)
==================================

[Media Quality] is a module for [Omeka S] that allows to make media available
with multiple qualities. For example a pdf file whose original is too big is
automatically converted and saved into ebook and screen sizes. This module uses
CLI dependencies. The process can be done similarly for video and audio files,
but they are not implemented

The list of degraded files and their size are available, so they may be used and
displayed anywhere in the theme.


Installation
------------

Uncompress files and rename module folder `MediaQuality`. Then install it
like any other Omeka module and follow the config instructions.

See general end user documentation for [Installing a module].

For security reasons (this module uses command line utilities), the config is
not available via the standard config page, but only in the file `config/module.config.php`.
The default dir where degraded files are saved is `files/xxx`.

This module may use command line utilities. For example, for pdf conversion, the
utility `gs` (ghostscript) should be installed.


Usage
-----

The process is made in the background, so you may check the list of jobs to
watch it.

Nothing is saved in the database, so files can be converted outside of Omeka S
and copied directly in the folders `files/xxx`, with the same name than the
original ones.

The list of files is displayed by default in the item and media views. A work in
the theme is needed to select the file to display.


Warning
-------

Use it at your own risk.

It’s always recommended to backup your files and your databases and to check
your archives regularly so you can roll back if needed.


Troubleshooting
---------------

See online issues on the [module issues] page on GitHub.


License
-------

This module is published under the [CeCILL v2.1] licence, compatible with
[GNU/GPL] and approved by [FSF] and [OSI].

This software is governed by the CeCILL license under French law and abiding by
the rules of distribution of free software. You can use, modify and/ or
redistribute the software under the terms of the CeCILL license as circulated by
CEA, CNRS and INRIA at the following URL "http://www.cecill.info".

As a counterpart to the access to the source code and rights to copy, modify and
redistribute granted by the license, users are provided only with a limited
warranty and the software’s author, the holder of the economic rights, and the
successive licensors have only limited liability.

In this respect, the user’s attention is drawn to the risks associated with
loading, using, modifying and/or developing or reproducing the software by the
user in light of its specific status of free software, that may mean that it is
complicated to manipulate, and that also therefore means that it is reserved for
developers and experienced professionals having in-depth computer knowledge.
Users are therefore encouraged to load and test the software’s suitability as
regards their requirements in conditions enabling the security of their systems
and/or data to be ensured and, more generally, to use and operate it in the same
conditions as regards security.

The fact that you are presently reading this means that you have had knowledge
of the CeCILL license and that you accept its terms.


Contact
-------

Current maintainers:

* Daniel Berthereau (see [Daniel-KM] on GitHub)


Copyright
---------

* Copyright Daniel Berthereau, 2017


[Media Quality]: https://github.com/Daniel-KM/Omeka-S-module-MediaQuality
[Omeka S]: https://omeka.org/s
[Installing a module]: http://dev.omeka.org/docs/s/user-manual/modules/#installing-modules
[module issues]: https://github.com/Daniel-KM/Omeka-S-module-MediaQuality/issues
[CeCILL v2.1]: https://www.cecill.info/licences/Licence_CeCILL_V2.1-en.html
[GNU/GPL]: https://www.gnu.org/licenses/gpl-3.0.html
[FSF]: https://www.fsf.org
[OSI]: http://opensource.org
[Daniel-KM]: https://github.com/Daniel-KM "Daniel Berthereau"
