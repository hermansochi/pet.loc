import ReactDOM from 'react-dom'
import './index.css'
import App from './App'

function Overlay() {
  return (
    <div style={{ position: 'absolute', top: 0, left: 0, pointerEvents: 'none', width: '100%', height: '100%' }}>
      <div style={{ position: 'absolute', bottom: 40, left: 40, fontSize: '13px' }}>
        <a href="https://github.com/hermansochi">
          herman.team
        </a>
        <br />
        dev collective: <a href="https://github.com/hermansochi">hermansochi</a>, 
        <a href="https://github.com/AnderyDov">AnderyDov</a>, 
        <a href="https://github.com/CodeMashine">Petr</a>, 
        <a href="https://github.com/AnderyDov">Anna Semenenko</a>
      </div>

      <div style={{ position: 'absolute', top: '50%', left: '50%', transform: 'translate3d(-50%,-50%,0)' }}>
        <h1 style={{ margin: 0, padding: 0, fontSize: '10em', fontWeight: 900, letterSpacing: '-0.05em' }}>HERMAN.TEAM</h1>
      </div>
      <div style={{ position: 'absolute', top: 40, left: 40, fontSize: '13px' }}>Coming soon:</div>
      <div style={{ position: 'absolute', bottom: 40, right: 40, fontSize: '13px' }}>17/10/2022</div>
    </div>
  )
}

ReactDOM.render(
  <>
    <App /> <Overlay />
  </>,
  document.getElementById('root')
)