<?php
namespace App\Repositories\website\product_option;

use Session;
use App\Models\ProductOption;
use App\Repositories\website\product_option\ProductOptionContract;

class EloquentProductOptionRepository implements ProductOptionContract
{

    public function getByFilter($data, &$statistic = null)
    {

        $oResults = new ProductOption();


        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=', $data['id']);
        }
        if (isset($data['coffee_id']) && !empty($data['coffee_id'])) {
            $oResults = $oResults->where('coffee_id', '=', $data['coffee_id']);
        }
        if (isset($data['option']) && !empty($data['option'])) {
            $oResults = $oResults->where('option', '=', $data['option']);
        }
        if (isset($data['name_en']) && !empty($data['name_en'])) {
            $oResults = $oResults->where('name_en', '=', $data['name_en']);
        }
        if (isset($data['name_ar']) && !empty($data['name_ar'])) {
            $oResults = $oResults->where('name_ar', '=', $data['name_ar']);
        }
        if (isset($data['price']) && !empty($data['price'])) {
            $oResults = $oResults->where('price', '=', $data['price']);
        }


        if ($statistic !== null) {
            $statistic = $this->getStatistic(clone $oResults);
        }

        if (isset($data['order']) && !empty($data['order'])) {
            $sort = (isset($data['sort']) && !empty($data['sort'])) ? $data['sort'] : 'desc';
            $oResults = $oResults->orderBy($data['order'], $sort);
        } else {
            $oResults = $oResults->orderBy('id', 'desc');
        }


        if (isset($data['getAllRecords']) && !empty($data['getAllRecords'])) {
            $oResults = $oResults->get();
        } elseif (isset($data['page_name']) && !empty($data['page_name'])) {
            $oResults = $oResults->paginate(config('deera.pagination_size'), ['*'], $data['page_name']);
        } else {
            $oResults = $oResults->paginate(config('deera.pagination_size'));
        }
        return $oResults;
    }

    public function getStatistic($oResults)
    {
        $oTotalResults = clone $oResults;

        $current_month = gmdate('Y-m');

        $totalResults = $oTotalResults->count();
        return ['total' => $totalResults];
    }

    public function getAllList($data = [])
    {

        $oResults = new ProductOption();

        $oResults = $oResults->get();

        $aResults = [];

        foreach ($oResults as $result) {
            $aResults[$result->id] = $result->name;
        }
        return $aResults;
    }

    public function create($data)
    {

        $result = ProductOption::create($data);

        if ($result) {
            Session::flash('flash_message', 'product_option added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

        $product_option = ProductOption::findOrFail($id);

        return $product_option;
    }

    public function destroy($id)
    {

        $result = ProductOption::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'product_option deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id, $data)
    {
        $product_option = ProductOption::findOrFail($id);
        $result = $product_option->update(is_array($data) ? $data : $data->all());
        if ($result) {
            Session::flash('flash_message', 'product_option updated!');
            return true;
        } else {
            return false;
        }

    }

}
