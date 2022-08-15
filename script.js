let isConnectted = false;
let writer;
var enc = new TextEncoder();
function hi(dir) {
    writer.write(enc.encode(dir));
}





async function onConnectUsb() {
      try {
        const requestOptions = {
          // Filter on devices with the Arduino USB vendor ID.
          filters: [{ usbVendorId: 0x2341 }],
        };

        // Request an Arduino from the user.
        port = await navigator.serial.requestPort(requestOptions);
        await port.open({ baudRate: 9600 });
        writer = port.writable.getWriter();
        isConnectted = true;
      } catch (e) {
        console.log("err", e);
      }
    }