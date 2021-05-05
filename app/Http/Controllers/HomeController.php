<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Modules\Home\Block\HomeBlock;
use App\Models\Catalog\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /*** @var HomeBlock */
    private $homeBlock;

    /**
     * HomeController constructor.
     * @param HomeBlock $homeBlock
     */
    public function __construct(HomeBlock $homeBlock)
    {
        $this->homeBlock = $homeBlock;
    }

    /**
     * @param Request $request
     * @return Application|Factory|View|JsonResponse
     */
    public function index(Request $request)
    {
        $secondHandProducts = Product::where('product_type', 'бу')->lastSecondHand()
            ->orderBy('created_at', 'DESC')->paginate(12);
        $secondHandProductsLastDay = Product::where('product_type', 'бу')->lastSecondHandDay()
            ->orderBy('created_at', 'DESC')->paginate(12);
        $compact = [
            'secondHandProducts' => $secondHandProducts,
            'block' => $this->homeBlock,
            'secondHandProductsLastDay' => $secondHandProductsLastDay,
        ];
        if ($request->ajax()) {
            if ($request->is_last_day === 'true') {
                $compact['secondHandProducts'] = $secondHandProductsLastDay;
            }
            $view = view('home.blocks.partials.second_hand', $compact)->render();
            return response()->json(['html' => $view]);
        }
        return view('home.index', $compact);
    }
}
