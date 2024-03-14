<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\News\StoreNewsRequest;
use App\Http\Requests\Admin\News\UpdateNewsRequest;
use App\Models\News;
use Carbon\Carbon;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statuses = News::getStatusArray();
        $data_now = Carbon::now()->format('Y-m-d');
        return view('admin.news.create', compact('statuses','data_now'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $data = $request->validated();
        $model = News::create($data);
        $message = __('news.NEWS_MESSAGE.CREATED', ['id' => $model["id"]]);
        return redirect()->route('admin.news.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $statuses = News::getStatusArray();
        //получение даты новости которую редактируем в формате для подстановки в поле даты
        $editable_date = Carbon::parse($news['date'])->format('Y-m-d');
        return view('admin.news.edit', compact('news', 'statuses', 'editable_date'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $data = $request->validated();
        $news->update($data);
        $message = __('news.NEWS_MESSAGE.CHANGED', ['id' => $news->id]);
        return redirect()->route('admin.news.show', $news->id)->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();
        $message = __('news.NEWS_MESSAGE.DELETED', ['id' => $news->id]);
        return redirect()->route('admin.news.index')->with('error', $message);
    }
}
