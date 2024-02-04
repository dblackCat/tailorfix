# Plugin for correcting the tailor for October CMS

At the moment there is only one fix:

An extension has been added EntryRecordModelHandler.php for normal
slug generation. The generation mechanism was taken from a
Sluggable trait and adapted for the EntryRecord model.


Slug generation works out of the box, right after
installing the plugin.

> Attention. There has not been much testing. Therefore,
> I do not know how this extension will behave in different
> configurations of drawings. For example, when using drafts
> or syncing a multisite.

