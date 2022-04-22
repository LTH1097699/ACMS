<?php

namespace Modules\Tinhluong\Events\Handlers;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\Core\Events\BuildingSidebar;
use Modules\User\Contracts\Authentication;

class RegisterTinhluongSidebar implements \Maatwebsite\Sidebar\SidebarExtender
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
        $menu->group(trans('core::sidebar.content'), function (Group $group) {
            $group->item(trans('tinhluong::tinhluongs.title.tinhluongs'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('tinhluong::tinhluongs.title.tinhluongs'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.tinhluong.tinhluong.create');
                    $item->route('admin.tinhluong.tinhluong.index');
                    $item->authorize(
                        $this->auth->hasAccess('tinhluong.tinhluongs.index')
                    );
                });
                $item->item(trans('tinhluong::ngachluongs.title.ngachluongs'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.tinhluong.ngachluong.create');
                    $item->route('admin.tinhluong.ngachluong.index');
                    $item->authorize(
                        $this->auth->hasAccess('tinhluong.ngachluongs.index')
                    );
                });
                $item->item(trans('tinhluong::soluongs.title.soluongs'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.tinhluong.soluong.create');
                    $item->route('admin.tinhluong.soluong.index');
                    $item->authorize(
                        $this->auth->hasAccess('tinhluong.soluongs.index')
                    );
                });
                $item->item(trans('tinhluong::bacluongs.title.bacluongs'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.tinhluong.bacluong.create');
                    $item->route('admin.tinhluong.bacluong.index');
                    $item->authorize(
                        $this->auth->hasAccess('tinhluong.bacluongs.index')
                    );
                });
// append




            });
        });

        return $menu;
    }
}
