<x-tomato-admin-container label="{{trans('tomato-admin::global.crud.create')}} {{__('Country')}}">
    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.countries.store')}}" method="post">

          <x-splade-input :label="__('Name')" name="name" type="text"  :placeholder="__('Name')" />
          <x-splade-input :label="__('Code')" name="code" type="text"  :placeholder="__('Code')" />
          <x-splade-input :label="__('Phone')" :placeholder="__('Phone')" type='tel' name="phone" />
          <x-splade-input :label="__('Lat')" name="lat" type="text"  :placeholder="__('Lat')" />
          <x-splade-input :label="__('Lang')" name="lang" type="text"  :placeholder="__('Lang')" />

        <div class="flex justify-start gap-2 pt-3">
            <x-tomato-admin-submit  label="{{__('Save')}}" :spinner="true" />
            <x-tomato-admin-button secondary :href="route('admin.countries.index')" label="{{__('Cancel')}}"/>
        </div>
    </x-splade-form>
</x-tomato-admin-container>
