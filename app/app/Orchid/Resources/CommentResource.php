<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\TD;

use Orchid\Crud\ResourceRequest;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Sight;

class CommentResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Comment::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [   
            Input::make('post_id')->title('Post')->type('number'),         
            Quill::make('text')->title('Text')->rows(5),
            Select::make('like')->title('Like')->options(array_combine(range(0, 10), range(0,10))),
            Select::make('dislike')->title('Dislike')->options(array_combine(range(0, 10), range(0,10)))
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),

            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
            
            TD::make('post_id', 'Post'),
            
            TD::make('text', 'Text')
                ->render(function($post){
                    return strip_tags($post->text);
                }),

            TD::make('like', 'Like'),

            TD::make('dislike', 'Dislike'),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [
            Sight::make('id', 'Id'),
            Sight::make('created_at', 'Created')->render(function($post){
                return $post->created_at->format('Y m d H:i');
            }),
            Sight::make('updated_at', 'Updated')->render(function($post){
                return $post->updated_at->format('Y m d H:i');
            }),
            Sight::make('post_id', 'Post'),
            Sight::make('text', 'Text')->render(function($post){
                return $post->text;
            }),
            Sight::make('like', 'Like'),
            Sight::make('dislike', 'Dislike')
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }

    public function save(ResourceRequest $request, Model $model): void
    {
        $model->user_id = auth()->user()->id;        

        parent::save($request, $model);        
    }

}
