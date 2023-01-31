<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.create')}} {{trans('tomato-locations::global.currency.single')}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.currencies.store')}}" method="post">

          <x-splade-input name="arabic" type="text"  placeholder="{{trans('tomato-locations::global.currency.arabic')}}" />
          <x-splade-input name="name" type="text"  placeholder="{{trans('tomato-locations::global.currency.name')}}" />
          <x-splade-input name="iso" type="text"  placeholder="{{trans('tomato-locations::global.currency.iso')}}" />

        <x-splade-submit label="{{trans('tomato-admin::global.crud.create-new')}} {{trans('tomato-locations::global.currency.single')}}" :spinner="true" />
    </x-splade-form>
</x-splade-modal>
