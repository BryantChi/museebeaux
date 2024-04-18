<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $postsInfo->id }}</p>
</div>

<!-- Post Title Field -->
<div class="col-sm-12">
    {!! Form::label('post_title', '文章標題:') !!}
    <p>{{ $postsInfo->post_title }}</p>
</div>

<!-- Post Slug Field -->
<div class="col-sm-12">
    {!! Form::label('post_slug', '文章自訂網址:') !!}
    <p>{{ $postsInfo->post_slug }}</p>
</div>

<!-- Post Content Field -->
<div class="col-sm-12">
    {!! Form::label('post_content', '文章內容:') !!}
    <div>{!! $postsInfo->post_content !!}</div>
</div>

<!-- Post Type Field -->
<div class="col-sm-12">
    {!! Form::label('post_type', '文章分類:') !!}
    <p>{{ $postsInfo->post_type }}</p>
</div>

<!-- Post Seo Setting Customize Field -->
<div class="col-sm-12">
    {!! Form::label('post_seo_setting_customize', '文章自訂SEO狀態:') !!}
    <p>{{ $postsInfo->post_seo_setting_customize }}</p>
</div>

<!-- Post Seo Title Field -->
<div class="col-sm-12">
    {!! Form::label('post_seo_title', '文章SEO標題:') !!}
    <p>{{ $postsInfo->post_seo_title }}</p>
</div>

<!-- Post Meta Title Field -->
<div class="col-sm-12">
    {!! Form::label('post_meta_title', '文章 Meta Title:') !!}
    <p>{{ $postsInfo->post_meta_title }}</p>
</div>

<!-- Post Meta Description Field -->
<div class="col-sm-12">
    {!! Form::label('post_meta_description', '文章 Meta Description:') !!}
    <p>{{ $postsInfo->post_meta_description }}</p>
</div>

<!-- Post Meta Keywords Field -->
<div class="col-sm-12">
    {!! Form::label('post_meta_keywords', '文章 Meta Keywords:') !!}
    <p>{{ $postsInfo->post_meta_keywords }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $postsInfo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $postsInfo->updated_at }}</p>
</div>

