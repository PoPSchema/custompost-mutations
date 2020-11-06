<?php

declare(strict_types=1);

namespace PoPSchema\CustomPostMutations\TypeAPIs;

/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
interface CustomPostTypeAPIInterface
{
    /**
     * @param array<string, mixed> $data
     * @return mixed the ID of the created custom post
     */
    public function createCustomPost(array $data);
}