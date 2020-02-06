/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



function Prices() {
  var priceObj = {};

  priceObj.setPrices = function () {
    this.set("AsymmetricalJewelWrap", "$160");
    this.set("AsymmetricalWrapinSteelGrey", "$200");
    this.set("CottonandLinenCurtainPanel", "$240");
    this.set("CountryFolkArtPillow", "$135");
    this.set("CountyFolkArtWallHanging", "$110");
    this.set("LargeBracketSet", "$48");
    this.set("LargeSwag", "$240");
    this.set("OpenKnotweedPanelwithselfvalance", "$180");
    this.set("OpenWeaveKnotweedCafeCurtains", "$120");
    this.set("OpenWeaveKnotweedPanelwithRodPocket", "$180");
    this.set("OpenWeaveKnotweedScarf", "$65");
    this.set("OpenWeaveKnotweedShawl", "$225");
    this.set("OpenWeaveKnotweedTableRunner", "$225");
    this.set("OpenWeaveKnotweedWrap", "$180");
    this.set("OpenWeaveSeaFoamShawl", "$180");
    this.set("PeaceFlag", "$30");
    this.set("PlainRodandBracketSet", "$25");
    this.set("RodwithForgedBallsandBracketSet", "$35");
    this.set("SeaGlassScarf", "$130");
    this.set("Shelfbracketwithcurtainrodhook", "$48");
    this.set("SmallBracketSet", "$32");
    this.set("SmallSwag", "$225");
    this.set("SteelGreyShawl", "$200");
  },

    priceObj.set = function (id, price) {
      var e = document.getElementById(id);
      if (e != null) {
        e.innerHTML = price;
      } else {
        e = document.querySelector("price");
        if (e != null) {
          e.innerHTML = "???";
        }
      }
      e = document.getElementById(id + "M");
      if (e != null) {
        e.innerHTML = price;
      } else {
        e = document.querySelector("price");
        if (e != null) {
          e.innerHTML = "???";
        }
      }
    }

  return priceObj;
}

