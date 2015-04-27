<?php

namespace NextrasTests\Orm;

use Nextras\Orm\Entity\Entity;
use Nextras\Orm\Relationships\ManyHasMany as MHM;


/**
 * @property string       $title
 * @property Author       $author        {m:1 AuthorsRepository}
 * @property Author|NULL  $translator    {m:1 AuthorsRepository $translatedBooks}
 * @property MHM|Tag[]    $tags          {m:n TagsRepository primary}
 * @property Book|NULL    $nextPart      {1:1d BooksRepository $previousPart primary}
 * @property Book|NULL    $previousPart  {1:1d BooksRepository $nextPart}
 * @property Ean|NULL     $ean           {1:1d EansRepository primary}
 * @property Publisher    $publisher     {m:1 PublishersRepository}
 */
final class Book extends Entity
{
}
