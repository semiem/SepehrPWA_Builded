{
  "homeStructureRows": [
    {
      "rowType": "STRUCT_TYPE_TAG",
      "rowData": {
        "data": [
          {
            "title": "جدول پخش",
            "onClick": {
              "method": "OPEN_EPG_TABLE",
              "field": ""
            }
          },
          {
            "title": "علاقه مندی ها",
            "onClick": {
              "method": "OPEN_PAGE_FAVORITE_CHANNELS",
              "field": ""
            }
          },
          {
            "title": "ویدیو های مورد علاقه",
            "onClick": {
              "method": "OPEN_PAGE_FAVORITE_VODS",
              "field": ""
            }
          },
          {
            "title": "در حال پخش",
            "onClick": {
              "method": "OPEN_PAGE_PLAYING_PROGRAMS",
              "field": ""
            }
          },
          {
            "title": "دسته بندی پخش زنده",
            "onClick": {
              "method": "OPEN_PAGE_LIVE_CATS",
              "field": "1"
            }
          },
          {
            "title": "دسته بندی ویدیو",
            "onClick": {
              "method": "OPEN_PAGE_VOD_CATS",
              "field": "5"
            }
          },
          {
            "title": "فیلم های اختصاصی سپهر",
            "onClick": {
              "method": "OPEN_PAGE_VOD_LIST",
              "field": "66"
            }
          }
        ],
        "type": "TYPE_TAG_DEFAULT"
      }
    },
    {
      "rowType": "STRUCT_TYPE_NEWLINE_8"
    },
    {
      "rowType": "STRUCT_TYPE_SLIDE_SHOW",
      "rowData": {
        "data": [
          {
            "src": "https://sepehr.irib.ir/uploads/files/sepehrIRIB/android/common/images/slideshow/irseries.jpg",
            "title": "سریال های ایرانی",
            "onClick": {
              "method": "OPEN_PAGE_VOD_CATS",
              "field": "111"
            }
          },
          {
            "src": "https://sepehr.irib.ir/uploads/files/sepehrIRIB/android/common/images/slideshow/besharat.jpg",
            "title": "بشارت",
            "onClick": {
              "method": "OPEN_PAGE_VOD_LIST",
              "field": "1096"
            }
          },
		  {
            "src": "https://sepehr.irib.ir/uploads/files/sepehrIRIB/android/common/images/slideshow/caffefilm.jpg",
            "title": "کافه فیلم",
            "onClick": {
              "method": "OPEN_PAGE_VOD_LIST",
              "field": "1099"
            }
          }
        ]
      }
    },
    {
      "rowType": "STRUCT_TYPE_LINE"
    },
    {
      "rowType": "STRUCT_TYPE_HALF_BANNER",
      "rowData": {
        "data": [
          {
            "src": "https://cdn1.shimaiptv.ir/uploads/app/shimaott/android/liveIRIB/android/common/files/saarasari.png?t=1",
            "title": "سراسری",
            "onClick": {
              "method": "OPEN_PAGE_CHANNEL_LIST",
              "field": "2"
            }
          },
          {
            "src": "https://cdn1.shimaiptv.ir/uploads/app/shimaott/android/liveIRIB/android/common/files/ostani.png?t=1",
            "title": "استانها",
            "onClick": {
              "method": "OPEN_PAGE_CHANNEL_LIST",
              "field": "3"
            }
          },
          {
            "src": "https://cdn1.shimaiptv.ir/uploads/app/shimaott/android/liveIRIB/android/common/files/boronmarzi.png?t=1",
            "title": "برون مرزی",
            "onClick": {
              "method": "OPEN_PAGE_CHANNEL_LIST",
              "field": "4"
            }
          }
        ],
        "type": "TYPE_HALF_BANNER_THIN"
      }
    },
    {
      "rowType": "STRUCT_TYPE_LINE"
    },
    {
      "rowType": "STRUCT_TYPE_ROW_HORIZONTAL_ITEM",
      "rowData": {
        "title": "همه کانال های سیما",
        "item": {
          "data": null,
          "type": "TYPE_PLAYING_PROGRAM_HORIZONTAL",
          "onLoad": {
            "method": "TYPE_SHOW_CHANNELS",
            "field": "2"
          }
        }
      }
    },
    {
      "rowType": "STRUCT_TYPE_ROW_HORIZONTAL_ITEM",
      "rowData": {
        "title": "شبکه های اختصاصی سپهر",
        "item": {
          "data": null,
          "type": "TYPE_LIVE_TV_GRID",
          "onLoad": {
            "method": "TYPE_SHOW_CHANNELS",
            "field": "1080"
          }
        }
      }
    },
    {
      "rowType": "STRUCT_TYPE_LINE"
    },
    {
      "rowType": "STRUCT_TYPE_BANNER",
      "rowData": {
        "title": "لیست شبکه ها",
        "src": "https://sepehr.irib.ir/uploads/files/sepehrIRIB/android/common/images/v3/live.jpg",
        "onClick": {
          "method": "OPEN_PAGE_LIVE_CATS",
          "field": "1"
        }
      }
    },
    {
      "rowType": "STRUCT_TYPE_NEWLINE_8"
    },
    {
      "rowType": "STRUCT_TYPE_BANNER",
      "rowData": {
        "title": "لیست محتواهای درخواستی",
        "src": "https://sepehr.irib.ir/uploads/files/sepehrIRIB/android/common/images/v3/vod.jpg",
        "onClick": {
          "method": "OPEN_PAGE_VOD_CATS",
          "field": "5"
        }
      }
    },
    {
      "rowType": "STRUCT_TYPE_NEWLINE_8"
    },
    {
      "rowType": "STRUCT_TYPE_HALF_BANNER",
      "rowData": {
        "data": [
          {
            "src": "https://sepehr.irib.ir/uploads/files/sepehrIRIB/android/common/images/v3/fav_live.jpg",
            "title": "شبکه های مورد علاقه",
            "onClick": {
              "method": "OPEN_PAGE_FAVORITE_CHANNELS",
              "field": ""
            }
          },
          {
            "src": "https://sepehr.irib.ir/uploads/files/sepehrIRIB/android/common/images/v3/fav_vod.jpg",
            "title": "ویدیوهای مورد علاقه",
            "onClick": {
              "method": "OPEN_PAGE_FAVORITE_VODS",
              "field": ""
            }
          },
          {
            "src": "https://sepehr.irib.ir/uploads/files/sepehrIRIB/android/common/images/v3/epg.jpg",
            "title": "جدول پخش",
            "onClick": {
              "method": "OPEN_EPG_TABLE",
              "field": ""
            }
          }
        ],
        "type": "TYPE_HALF_BANNER_THIN"
      }
    },
    {
      "rowType": "STRUCT_TYPE_LINE"
    },
    {
      "rowType": "STRUCT_TYPE_ROW_HORIZONTAL_ITEM",
      "rowData": {
        "title": "اختصاصی سپهر",
        "item": {
          "data": null,
          "type": "TYPE_VOD",
          "onLoad": {
            "method": "TYPE_SHOW_VODS",
            "field": "66"
          }
        }
      }
    },
    {
      "rowType": "STRUCT_TYPE_BANNER",
      "rowData": {
        "title": "شبکه شیران",
        "src": "https://sepehr.irib.ir/uploads/files/sepehrIRIB/android/common/images/v3/shiran2.jpg",
        "onClick": {
          "method": "OPEN_PAGE_CHANNEL",
          "field": "15704"
        }
      }
    },
    {
      "rowType": "STRUCT_TYPE_NEWLINE_8"
    },
    {
      "rowType": "STRUCT_TYPE_ROW_HORIZONTAL_ITEM",
      "rowData": {
        "title": "همه کانال های رادیو نما",
        "item": {
          "data": null,
          "type": "TYPE_LIVE_TV_GRID",
          "onLoad": {
            "method": "TYPE_SHOW_CHANNELS",
            "field": "1077"
          }
        }
      }
    },
    {
      "rowType": "STRUCT_TYPE_ROW_HORIZONTAL_ITEM",
      "rowData": {
        "title": "فیلم سینمایی",
        "item": {
          "data": null,
          "type": "TYPE_VOD",
          "onLoad": {
            "method": "TYPE_SHOW_VODS",
            "field": "67"
          }
        }
      }
    },
    {
      "rowType": "STRUCT_TYPE_ROW_HORIZONTAL_ITEM",
      "rowData": {
        "title": "کودک و نوجوان",
        "item": {
          "data": null,
          "type": "TYPE_VOD",
          "onLoad": {
            "method": "TYPE_SHOW_VODS",
            "field": "351"
          }
        }
      }
    },
    {
      "rowType": "STRUCT_TYPE_LINE"
    }
  ]
}