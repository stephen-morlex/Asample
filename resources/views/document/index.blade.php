@extends('layouts.app')
@section('title', 'Events')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>Documents</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{route('document.index')}}">Documents</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->
<!-- Content section -->
<div class="content-section module">
    <!-- Seminar/Events -->
    <div class="space-section module">
        <div class="row">
                <table>
                    <thead>
                        <tr>
                        <th width="900"><h1>Files</h1></th>
                        <th width=""><h1>View</h1></th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($documents as $document)
                        <tr>
                            <td>
                            @if (!empty($document->file[0]))
                                <?php $file = (json_decode($document->file))[0]->download_link; ?>
                                <a href="{{ Voyager::image( $file ) }}" target="_blank" >{!! $document->title !!}</a>
                            @else
                                <li>There is no document at the moment!</li>
                            @endif
                            </td>
                            <td>
                                @if (!empty($document->file[0]))
                                    <?php $file = (json_decode($document->file))[0]->download_link; ?>
                                    <a href="{{ Voyager::image( $file ) }}" target="_blank" class="button primary">View</a>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <h3>There is no document at the moment!</h3>
                    @endforelse
                    </tbody>
                </table>

        </div><!-- Row Ends /-->
    </div>
    <!-- Seminar Events Ends /-->
</div>
<!-- Content Section Ends /-->
<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection

