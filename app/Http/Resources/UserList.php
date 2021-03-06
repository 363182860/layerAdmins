<?php

namespace App\Http\Resources;

use App\Client;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserList extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'code' => 0,
            'msg' => '数据拉取成功',
            'data' => $this->collection,
            'count' => Client::count()
        ];
        //return parent::toArray($request);
    }
}
