<?php

namespace Backend\Modules\ContentBlocks\ContentBlock;

use Backend\Core\Engine\DataGridDB;
use Backend\Core\Language\Locale;

class BrowseDataGrid extends DataGridDB
{
    /**
     * @param Locale $locale
     */
    public function __construct(Locale $locale)
    {
        parent::__construct(
            'SELECT i.id, i.title, i.hidden
             FROM content_blocks AS i
             WHERE i.status = :active AND i.language = :language',
            ['active' => Status::active(), 'language' => $locale]
        );
    }
}
