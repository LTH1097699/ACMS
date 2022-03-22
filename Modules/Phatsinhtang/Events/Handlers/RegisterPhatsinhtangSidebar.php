<?php

namespace Modules\Phatsinhtang\Events\Handlers;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\Core\Events\BuildingSidebar;
use Modules\User\Contracts\Authentication;

class RegisterPhatsinhtangSidebar implements \Maatwebsite\Sidebar\SidebarExtender
{
    /**
     * @var Authentication
     */
    protected $auth;

    /**
     * @param Authentication $auth
     *
     * @internal param Guard $guard
     */
    public function __construct(Authentication $auth)
    {
        $this->auth = $auth;
    }

    public function handle(BuildingSidebar $sidebar)
    {
        $sidebar->add($this->extendWith($sidebar->getMenu()));
    }

    /**
     * @param Menu $menu
     * @return Menu
     */
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('phatsinhtang::phatsinhtangs.title.phatsinhtangs'), function (Group $group) {
            $group->weight(4);

            $group->item(trans('phatsinhtang::thongtinnhanviens.title.thongtinnhanviens'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(0);
                $item->route('admin.phatsinhtang.thongtinnhanvien.index');
                $item->authorize(
                     /* append */
                     $this->auth->hasAccess('phatsinhtang.thongtinnhanviens.index')
                     
                );
            });
            $group->item(trans('phatsinhtang::chuyennoibotcts.title.chuyennoibotcts'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(1);
                $item->route('admin.phatsinhtang.chuyennoibotct.create');
                $item->authorize(
                     /* append */
                     $this->auth->hasAccess('phatsinhtang.chuyennoibotcts.create')
                );
            });
            
            
        });

        return $menu;
    }
}
