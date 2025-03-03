<?php
/*
 * Copyright (C) 2023 Xibo Signage Ltd
 *
 * Xibo - Digital Signage - https://xibosignage.com
 *
 * This file is part of Xibo.
 *
 * Xibo is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * Xibo is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Xibo.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Xibo\Event;

use Xibo\Entity\Layout;
use Xibo\Entity\Region;

/**
 * Event fired when a region is being added (before save)
 */
class RegionAddedEvent extends Event
{
    public static string $NAME = 'region.added.event';

    /** @var Layout */
    private Layout $layout;

    /** @var Region */
    private Region $region;

    public function __construct(Layout $layout, Region $region)
    {
        $this->layout = $layout;
        $this->region = $region;
    }

    public function getLayout(): Layout
    {
        return $this->layout;
    }

    public function getRegion(): Region
    {
        return $this->region;
    }
}
