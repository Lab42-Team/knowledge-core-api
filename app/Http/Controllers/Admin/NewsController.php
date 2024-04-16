<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Filters\NewsFilter;
use App\Http\Requests\Admin\News\FilterNewsRequest;
use App\Http\Requests\Admin\News\StoreNewsRequest;
use App\Http\Requests\Admin\News\UpdateNewsRequest;
use App\Models\News;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index(FilterNewsRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(NewsFilter::class, ['queryParams' => array_filter($data, 'strlen')]);

        $news = News::filter($filter)->paginate(20);
        $statuses = News::getStatusArray();
        return view('admin.news.index', compact('news', 'statuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function create()
    {
        $statuses = News::getStatusArray();
        return view('admin.news.create', compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreNewsRequest $request
     * @return RedirectResponse
     */
    public function store(StoreNewsRequest $request)
    {
        $model = News::create($request->validated());
        $message = __('news.NEWS_MESSAGE.CREATED', ['id' => $model->id]);
        return redirect()->route('admin.news.show', $model->id)->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param News $news
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param News $news
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function edit(News $news)
    {
        $statuses = News::getStatusArray();
        return view('admin.news.edit', compact('news', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateNewsRequest $request
     * @param News $news
     * @return RedirectResponse
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $news->update($request->validated());
        $message = __('news.NEWS_MESSAGE.CHANGED', ['id' => $news->id]);
        return redirect()->route('admin.news.show', $news->id)->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return RedirectResponse
     */
    public function destroy(News $news)
    {
        $news->delete();
        $message = __('news.NEWS_MESSAGE.DELETED', ['id' => $news->id]);
        return redirect()->route('admin.news.index')->with('error', $message);
    }
}
