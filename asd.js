
var browserName = (function (agent) {
  switch (true) {
      case agent.indexOf("edge") > -1: return "MS Edge";
      case agent.indexOf("edg/") > -1: return "Edge ( chromium based)";
      case agent.indexOf("opr") > -1 && !!window.opr: return "Opera";
      case agent.indexOf("chrome") > -1 && !!window.chrome: return "Chrome";
      case agent.indexOf("trident") > -1: return "MS IE";
      case agent.indexOf("firefox") > -1: return "Mozilla Firefox";
      case agent.indexOf("safari") > -1: return "Safari";
      default: return "other";
  }
})(window.navigator.userAgent.toLowerCase());
  
document.getElementById("browser").value=browserName;  
//console.log(window.navigator.userAgent)
function OP() {
  var userAgent = window.navigator.userAgent,
      platform = window.navigator?.userAgentData?.platform || window.navigator.platform,
      macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K'],
      windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
      iosPlatforms = ['iPhone', 'iPad', 'iPod'],
      os = null;

  if (macosPlatforms.indexOf(platform) !== -1) {
    os = 'Mac OS';
  } else if (iosPlatforms.indexOf(platform) !== -1) {
    os = 'iOS';
  } else if (windowsPlatforms.indexOf(platform) !== -1) {
    os = 'Windows';
  } else if (/Android/.test(userAgent)) {
    os = 'Android';
  } else if (/Linux/.test(platform)) {
    os = 'Linux';
  }

  return os;
}
  

document.getElementById('os').value = OP()
  
fetch("https://ipapi.co/json/")
.then((res) => res.json())
.then((data) =>{
  document.getElementById("ip").value = data.ip
  document.getElementById("orszag").value = data.country_name
})

const deviceType = () => {
  const ua = navigator.userAgent;
  if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua)) {
      return "tablet";
  }
  else if (/Mobile|Android|iP(hone|od)|IEMobile|BlackBerry|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(ua)) {
      return "telefon";
  }
  return "asztali számitógép";
};
document.getElementById("esz").value = deviceType()
  
gomb = document.getElementById("ment")
setTimeout(() => {

gomb.click()
}, 1000);

document.getElementById('ram').value= `${navigator.deviceMemory} GB`


batteryPromise = navigator.getBattery()
batteryPromise.then(function (battery) {
  document.getElementById("aksi").value = (battery.level*100 + '%')
  console.log(battery)
}).catch(error => {
  document.getElementById("aksi").value = "nincs adat"
})
var canvas = document.createElement('canvas');
var gl;
var debugInfo;
var vendor;
var renderer;

try {
  gl = canvas.getContext('webgl') || canvas.getContext('experimental-webgl');
} catch (e) {
}

if (gl) {
  debugInfo = gl.getExtension('WEBGL_debug_renderer_info');
  vendor = gl.getParameter(debugInfo.UNMASKED_VENDOR_WEBGL);
  renderer = gl.getParameter(debugInfo.UNMASKED_RENDERER_WEBGL);
}

document.getElementById("vid").value = renderer
document.getElementById("log").value = navigator.hardwareConcurrency
