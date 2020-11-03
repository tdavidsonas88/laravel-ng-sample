<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

/**
 * Class QuoteController
 * @package App\Http\Controllers
 */
class QuoteController extends Controller
{
    /**
     * @param Request $request
     */
    public function postQuote(Request $request)
    {
        $quote = new Quote();
        $quote->content = $request->input('content');
        $quote->save();
        return response()->json($quote);
    }

    /**
     * get Quotes list
     */
    public function getQuotes()
    {
        $quotes = Quote::all();
        $response = [
            'quotes' => $quotes
        ];
        return response()->json($response, 200);
    }

    /**
     * @param Request $request
     * @param $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function putQuote(Request $request, $id)
    {
        $quote = Quote::find($id);
        if (!$quote) {
            return response()->json(['message' => 'Document not found'], 404);
        }
        $quote->content = $request->input('content');
        $quote->save();
        return response()->json(['quote' => $quote], 200);
    }

    /**
     * @param $id
     */
    public function deleteQuote($id)
    {
        $quote = Quote::find($id);
        $quote->delete();
        return response()->json(['message' => 'Quote deleted'], 200);
    }
}
